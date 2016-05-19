<?php
 namespace App\Http\Controllers;
use DB;

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
    	$data = DB::table('rent')->get();
    	//print_r($data);die;
    	return view('html/index')->with('arrr',$data);
    }
    //已租
    public function chu(){
    	$data = DB::table('rent')->where('lease','0')->get();
    	return view('html/index')->with('arrr',$data);
    }
    //未租
    public function wei(){
    	$data = DB::table('rent')->where('lease','1')->get();
    	return view('html/index')->with('arrr',$data);
    }
    //已售
    public function shou(){
    	$data = DB::table('rent')->where('lease','2')->get();
    	return view('html/index')->with('arrr',$data);
    }
    //详情
    public function details(){
    	return view('html.single');
    }
}
