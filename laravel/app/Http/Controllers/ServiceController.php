<?php
 namespace App\Http\Controllers;
use DB;
use Input;
use Object;
use paginate;//分页样式一
use simplePaginate;//分页样式二

class ServiceController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

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

    public function services(request $request)
    {
        return view('html.services');
    }

    //所有房源信息展示
    public function shows(){
        $posts = DB::table('rent')->paginate(3);
        return view('html/index',['posts'=>$posts]);
    }
    //已租
    public function chu(){
    	//$data = DB::table('rent')->where('lease','0')->get();
        $posts = DB::table('rent')->where('lease','0')->paginate(3);
    	return view('html/index')->with('arrr',$data);
    }
    //未租
    public function wei(){
    	//$data = DB::table('rent')->where('lease','1')->get();
        $posts = DB::table('rent')->where('lease','1')->paginate(3);
    	return view('html/index')->with('arrr',$data);
    }
    //已售
    public function shou(){
    	//$data = DB::table('rent')->where('lease','2')->get();
        $posts = DB::table('rent')->where('lease','2')->paginate(3);
    	return view('html/index')->with('arrr',$data);
    }
    //详情
    public function details(){

    	return view('html.single3');
    }
    //单个房源详情
    public function showsxq(){
        $a = Input::get('xqid');
        $data = DB::table('rent')->where('rent_id',$a)->get();
        $obj = $data['0'];
        $nums = get_object_vars($obj);
        $id = $nums['rent_id'];
        return $id;
        //print_r($nums);die;
        //view('html/single3')->with($id);
    }
    //map
    public function map(){

        return view('html.map');
    }
    function objectToArray(){
        $id = Input::get();//接ID
        $data = DB::table('rent')->where('rent_id',$id)->get();//查询数据
        //$obj = $data['0'];
        //$array1 = get_object_vars($obj);//将对象转换为数组格式
        //print_r($data);die;
        return view('html/single3')->with('arr',$data);
        
    }

    //添加房源
    public function addhouse(){
        
        return view('html/addroom');
    }

    //视频
    
    public function neironggb(){
       $data = Input::get();//接ID
        $name = "video/".$data['xqid'];
        echo $name;die;
       // return $this->render('dianming.html',array);
    }
}
 