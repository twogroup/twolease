<?php namespace App\Http\Controllers;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller {

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
    //展示用户中心
	public function shows()
	{
        return view('html.personal');
	}

}
