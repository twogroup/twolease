<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Request,Validator,DB;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
class LoginController extends Controller {

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
    /**
     * 登录页面
     */
    public function login()
    {
        return view('html.login');
    }

    /**
     * 用户注册
     */
    public function adds()
    {
        //接收表单中的值
        $name=Request::input('user');
        $sta=Request::input('sta');
        $email=Request::input('email');
        $files=Request::input('myfile');
        //把密码进行加密
        $pwd=Request::input('passwd');
        $salt = substr($pwd, 0, 2);
        $userPswd = crypt($pwd, $salt);

        //图片上传
        $files=Request::file('myfile');

	    $clientName = $files ->  getClientOriginalName();
	   //所以这里道出了文件上传的原理,将文件上传的某个临时目录中,然后使用Php的函数将文件移动到指定的文件夹.
	    $entension = $files -> getClientOriginalExtension();   //上传文件的后缀.

        $filedir=$_SERVER['DOCUMENT_ROOT']."/twolease/laravel/public/uploads/";//上传存放的目录

        $newImagesName=md5(time()).rand(1000,9999).".".$entension; //重新命名上传文件名字
        $files->move($filedir,$newImagesName); //使用move 方法移动文件.

    //添加用户注册信息
       $sql= DB::table('login_s')->insert(array(
            array('name' => $name,
                'pwd' => $userPswd,
                'email' => $email,
                'stats' => $sta,
                'photos' => $filedir.$newImagesName
               )
        )
       );
        //判断是否添加成功，添加成功跳转到登录页面
        if($sql){
            return view('html.login');
        }
    }
    /**
     * 验证登录是否成功
     */
    public function loginss(){
        $name=Request::input('username');
        $pwd=Request::input('p');
        $free=Request::input('free');
        //echo $free;die;
        $salt = substr($pwd, 0, 2);
        $userPswd = crypt($pwd, $salt);
        //七天免登录
        $users = DB::table('login_s')->select()
             ->where(['pwd'=>$userPswd,'name'=>$name])
             ->get();
        $pictures=$users[0]->photos;
        //echo $picture;die;
        //echo gettype($pictures);
        //print_r($pictures);die;
            //判断是否登录成功
            if($users){
                if($free==1){
                    setcookie("name",$name,time()+3600*24*7);
                    setcookie("pictures",$pictures,time()+3600*24*7);
                    //echo "<script>alert('登录成功！');</script>";
                    echo "<script>alert('登录成功！');location.href='index'</script>";
                }else{
                    setcookie("name",$name);
                    setcookie("pictures",$pictures);
                    echo "<script>alert('登录成功！');location.href='index'</script>";
                    //return view('html.index');
                }

            }else{

                echo "<script>alert('登录失败,请重新登录！');location.href='logins'</script>";
            }
    }

}
