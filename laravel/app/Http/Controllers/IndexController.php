<?php namespace App\Http\Controllers;
use DB;
use Input;
use Object;
use paginate;//分页样式一
use simplePaginate;//分页样式二

class IndexController extends Controller {

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
	public function index()
	{
        $posts = DB::table('rent')->paginate(3);
        //return view('home');
        return view('html/index',['posts'=>$posts]);
	}


}
