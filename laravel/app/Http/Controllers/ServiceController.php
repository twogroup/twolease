<?php
 namespace App\Http\Controllers;

use Input,DB,Request;
use Illuminate\Contracts\Pagination;
use PhpParser\Node\Expr\Cast\Object;
//use paginate;//分页样式一
use simplePaginate;//分页样式二
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

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

    public function services()
    {
        $posts = DB::table('house')->paginate(12);
        return view('html.services',['posts'=>$posts]);
    }


    /**
     * 所有房源信息展示
     * @return \Illuminate\View\View
     */
    public function shows(){
        $posts = DB::table('availability')->paginate(3);
        //print_r($posts);die;
        return view('html/index',['posts'=>$posts]);
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
        $data = DB::table('house')->where('rent_id',$house_id)->get();
        $nums = get_object_vars($data['0']);
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
        $data = DB::table('house')->where('rent_id',$id)->get();//查询数据
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

}
 