<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Request,Validator,DB;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller {

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
        $entension = $files -> getClientOriginalExtension();         //上传文件的后缀.

        $filedir=$_SERVER['DOCUMENT_ROOT']."/uploads/user/";    //上传存放的目录

        $newImagesName=md5(time()).rand(1000,9999).".".$entension;  //重新命名上传文件名字
        $files->move($filedir,$newImagesName); //使用move 方法移动文件.

        //添加注册用户
            $sql= DB::table('user')->insert(array(
                    array('username' => $name,
                        'pwd' => $userPswd,
                        'email' => $email,
                        'status' => $sta,
                        'photos' => "uploads/user/".$newImagesName
                    )
                )
            );

        //判断是否添加成功，添加成功跳转到登录页面
        if($sql){
            return "<script>alert('注册成功，正在跳转...');location.href='logins'</script>";
        }
    }
    /**
     * 验证登录是否成功
     */
    public function loginss(){
        $name=Request::input('u_name');
        $pwd=Request::input('pwds');
        $free=Request::input('free');
        $salt = substr($pwd, 0, 2);
        $userPswd = crypt($pwd, $salt);

        //七天免登录
        $users = DB::table('user')->select()
             ->where(['pwd'=>$userPswd,'username'=>$name])
             ->get();
        $pictures=$users[0]->photos;
            //判断是否登录成功
            if($users){
                if($free==1){
                    setcookie("name",$name,time()+3600*24*7);
                    setcookie("pictures",$pictures,time()+3600*24*7);

                    return "<script>alert('登录成功！');location.href='show'</script>";
                }else{
                    setcookie("name",$name);
                    setcookie("pictures",$pictures);
                    return "<script>alert('登录成功！');location.href='show'</script>";
                }

            }else{

                return "<script>alert('登录失败,请重新登录！');location.href='logins'</script>";
            }
    }

}
