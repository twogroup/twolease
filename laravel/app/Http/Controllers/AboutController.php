<?php namespace App\Http\Controllers;

use DB;
/**
 * Class AboutController
 * @package App\Http\Controllers
 */
class AboutController extends Controller {

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

    public function about()
    {
        $mem_info = DB::table('member')->paginate();
        $desc=DB::table('us')->paginate();
        return view('html.about',['staff'=>$mem_info,'us'=>$desc]);
    }
}
