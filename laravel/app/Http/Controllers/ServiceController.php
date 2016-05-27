<?php
 namespace App\Http\Controllers;

use DB;
use Input;
use App\Http\Requests\Request;
use Illuminate\Contracts\Pagination;
use PhpParser\Node\Expr\Cast\Object;
//use paginate;//分页样式一
use simplePaginate;//分页样式二

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
    public function addhouse(){
        
        return view('html/addroom');
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
}
 