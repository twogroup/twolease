<?php
 namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use DB;
use Input;
use Illuminate\Contracts\Pagination;
use PhpParser\Node\Expr\Cast\Object;
//use Input,DB,Validator;
//use Request;
//use paginate;//分页样式一
//use simplePaginate;//分页样式二
/*
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
/*use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input,DB;*/

/**
 * Class ServiceController
 * @package App\Http\Controllers
 */
class ServiceController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

    // 测试
    public function test(){
        return view('html.test');
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function services()
    {
        $posts = DB::table('house')->paginate(12);

        $sub_area = DB::table('subway')->where("region_id",1)->paginate();

        return view('html.services',['posts'=>$posts,'sub_area'=>$sub_area]);
    }


    public function area(){

       //print_r($_GET);die;
        $housetype= Request::get('housetype');   //  户型
        $price = explode('-',Request::get('radio2'));   //   租金
        $area  = explode('-',Request::get('area'));    //  面积 条件   $area[0] = "小的数字"
        $region = Request::get('region');    // 区域 条件
      // print_r($price[1]);die;
        $where= '';
        if(!empty($price)){
            if($price!="不限"){
                if(isset($price['1'])) {
                    $where .= " and (pay>='" . $price[0] . "' and pay<='" . $price[1] . "')";
                }else {
                    if ($price[0] == "1500") {
                        $where .= " and (pay<'"  . $price[0] . "')";
                    }else{
                        $where .=" and (pay>='"  . $price[0] ."')";
                    }
                }
            }
        }
        if(!empty($region)){
            $where.=" and area like '%$region%'";
        }
        if(!empty($housetype)){
            $where.=" && housetype='".$housetype."'";  //房屋类型，如二室一厅，三室二厅
        }
        if(!empty($area)){
            if(isset($area['1'])) {
                $where.= ' and (mianji>='.$area[0].' and mianji<='.$area[1].')';
            }else{
                if($area[0]=="50"){
                    $where.= " and (mianji<'".$area[0]."')";
                }else{
                    $where.= " and (mianji>='".$area[0]."')";
                }

            }
        }
        //$sql="select * from house where 1=1 ".$where;
        $areas = DB::select("select * from house where 1=1".$where);
       // print_r($areas);die;
        $str="";
        $str.='<div class="service_grid" >';

        foreach ($areas as $val){
            $str.='  	<div class="col-md-3 service_box">';
            $str.='		<a class="fancybox"  href="uploads/'.$val->photo.'"  data-fancybox-group="gallery" title="Product Name">';
		    $str.='<img src="uploads/'.$val->photo.' " width="400px" class="img-responsive" alt=""/><span> </span></a>';
            $str.='    <h4><a href="javascript:void(0)" onclick="nae( '.$val->rent_id.')">'.$val->title.' </a></h4>';
            $str.='	<p> '.$val->area.$val->community.$val->content.'</p>';
            $str.='	</div>';
        }



	      $str.=' 	<div class="clearfix"> </div>';
        $str.='</div>';
        echo $str;

        // return $areas;die;
              // $sub_area = DB::table('subway')->where("region_id",1)->paginate();
              //  return view('html.services',['posts'=>$areas,'sub_area'=>$sub_area]);
                //print_r($areas);die;

        //        $areas = DB::table('house')
        //            ->where("area",'like','%'.$area.'%'.'1=1'.$where)
        //            ->paginate(12);
        //        print_r($areas);die;
        //        return $areas;
        //
    }

    public function serch(){
        $serval = Request::input('serval'); //接小区名 或 地段名
        $posts = DB::table('house')
            ->where("community", 'like','%'.$serval.'%')
            ->orWhere("area",'like','%'.$serval.'%')
            ->paginate(12);

        return view('html.services',['posts'=>$posts]);

    }


    /**
     * 所有房源信息展示
     * @return \Illuminate\View\View
     */
    public function shows(){

        // 所有房源
        $house_all = DB::table('availability')->paginate(6);

        //热门房源
        $house_hot = DB::table('availability')->where('is_hot',1)->paginate(6);

        //增值房源
        $house_apprec = DB::table('availability')->where('is_ appreciation',1)->paginate(6);
        return view('html/index',['posts'=>$house_all, 'hot'=>$house_hot,'apprec'=>$house_apprec]);
    }

    /**
     * 已租
     * @return $this
     */
    public function chu(){

        $posts = DB::table('house')->where('lease','0')->paginate(3);
    	return view('html/index')->with('arrr',$posts);
    }

    /**
     * 未租
     * @return $this
     */
    public function wei(){

        $posts = DB::table('house')->where('lease','1')->paginate(3);
    	return view('html/index')->with('arrr',$posts);
    }

    /**
     * 已售
     * @return $this
     */
    public function shou(){

        $posts = DB::table('house')->where('lease','2')->paginate(3);
    	return view('html/index')->with('arrr',$posts);
    }

    /**
     * @return \Illuminate\View\View
     * 详情
     */
    public function details(){

    	return view('html.single3');
    }

    /**
     * 单个房源详情
     * @return mixed
     */
    public function showsxq(){
        $house_id = Input::get('xqid');
        $data = DB::table('availability')->where('ava_id',$house_id)->get();
        $nums = get_object_vars($data['0']);
        return $nums['ava_id'];

        return $nums['rent_id'];
    }
    //收藏
    public function servicess(){
        $id = Input::get('id');
        $name=$_COOKIE['name'];
        //通过ID查询房源详情
        $arr=DB::table("house")->select()
            ->where(['rent_id'=>$id])
            ->get();
        //查询是否收藏
        $where = DB::table('collect')->select()
            ->where(['username'=>$name,'h_id'=>$id])
            ->get();

        if($where){
            echo 3;
        }else{
            //收藏添加
            $insert= DB::table('collect')->insert(array(
                    array('username' => $name,
                        'h_id' => $id,
                        'lname' => $arr[0]->lname,
                        'datetime' => $arr[0]->datetime,
                        'photo' => $arr[0]->photo,
                        'phone' => $arr[0]->phone,
                    )
                )
            );
            if($insert){
                echo 1;
            }else{
                echo 0;
            }
        }
    }
    //删除收藏
    public function service_del(){
        $id = Input::get('id');
        //删除
        $del=DB::delete("delete from collect where collect_id='$id'");
        if($del){
            echo 1;
        }else{
            echo 0;
        }
    }
    /**
     * map
     * @return \Illuminate\View\View
     */
    public function map(){
        return view('html.map');
    }

    /**
     * @return $this
     */
    function objectToArray(){

        $id = Input::get(); //接ID
        $data = DB::table('availability')->where('ava_id',$id)->get();//查询数据
        return view('html/single3')->with('arr',$data);
        
    }

    /**
     * 添加房源
     * @return \Illuminate\View\View
     */
    public function addhouse2(){
        return view('html/addhouse');
    }
    public function addhouse3(){
        $serval = Request::input(); //验证房源名称唯一！！！
        //print_r($serval);die;
        $name = $serval['house_address'];
            $addtwo = DB::table('availability')->insert([
                'house_address' => $serval['house_address'],
                'number' => $serval['number'],
                'house_size' => $serval['house_size'],
                'house_postion' => $serval['house_postion'],
                'house_desc' => $serval['house_desc'],
                'property_class' => $serval['property_class'],
                'linkman' => $serval['linkman'],
                'phone' => $serval['phone'],
                 ]);
            if ($addtwo) {
                return view('html/addhouse3')->with('name',$name);
            }
    }

    public function addhouse4(){
        $serval = Request::input();
        $name = $serval['name'];
        $addfree = DB::table('availability')
            ->where('house_address', $name)
            ->update([
            'house_type' => $serval['house_type'],
            'in_time' => $serval['in_time'],
            'out_time' => $serval['out_time'],
            'receive_time' => $serval['receive_time'],
            'deposit' => $serval['deposit'],
            'pay' => $serval['pay'],
                ]);
        if ($addfree) {
            return view('html/addhouse5');
        }
        return view('html/addhouse');
        
    }

    /**
     * 视频
     */
    public function neironggb(){
       $data = Input::get();    //接ID
        $name = "video/".$data['xqid'];
        echo $name;die;
       // return $this->render('dianming.html',array);
    }


    // 图片 上传
    public function  pic(Request $request){
        $file = $request->file('upfile');
        //print_r($file);die;
        //验证文件是否存在
        if ($request->hasFile('upfile')) {
            //
            $clientName = $file->getClientOriginalName();  // 获取 图片名称

           // $path = $request->file('upfile')->getRealPath();//获取一个已上传的文件在服务器的真实路径

            $entension = $file->getClientOriginalExtension();   //上传文件的后缀.

            // 定义新路径
           // $destinationPath = "E:\phpStudy\\twolease\laravel\public\up";
            $destinationPath=$_SERVER['DOCUMENT_ROOT']."/uploads/up/";

            //使用isValid方法判断文件在上传过程中是否出错：
            if ($request->file('upfile')->isValid()) {
                //
                if ($request->file('upfile')->move($destinationPath, $clientName)) {
                    return "upload is success";
                } else {
                    return "upload is fail";
                }
            }
        } else {
            return 'Error  the file no exits.';
        }
    }

   public function city(){
      // $ser = Request::input('serch');    //姐值
        $ser="大傻";
        print_r($ser) ;die;
       // return $this->render('dianming.html',array);
 
}

}
 