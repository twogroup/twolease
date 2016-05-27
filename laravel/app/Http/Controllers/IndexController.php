<?php namespace App\Http\Controllers;

use DB;
use Input;
use Object;
use paginate;//分页样式一
use simplePaginate;//分页样式二

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller {

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
     * @return \Illuminate\Http\RedirectResponse
     */
	public function index()
	{
        return redirect()->action('ServiceController@shows');
	}


}
