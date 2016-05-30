<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Request,Validator,DB;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
/**
 * 用户中心管理
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
	 * 欢迎来到用户中心页面
	 *
	 * @return Response
	 */
	public function show()
	{
        if(empty($_COOKIE['name'])){
            //查看个人中心需要先进行登录
           return "<script>alert('请先登录');location.href='logins'</script>";
            //return redirect()->route('logins');
        }else{
            $name=$_COOKIE['name'];
            //$pwd=$_COOKIE['pwd'];
            $users = DB::table('user')->select()
                ->where(['username'=>$name])
                ->get();
            //var_dump($users);die;
            return view('user.info',["users"=>$users,"img"=>$_COOKIE['pictures'],"other_name"=>$name]);

        }
    }

    /**
     *完善用户信息
     */
    public function information(){
        //接收用户的值
        $username=$_COOKIE['name'];
        $pwd=$_COOKIE['pwd'];
        $users = DB::table('user')->select()
            ->where(['pwd'=>$pwd,'username'=>$username])
            ->get();
        //var_dump($users);die;
       $id=$users[0]->id;
        //echo $id;die;
        $t_name=Request::input('t_name');
        $name=Request::input('username');
        $email=Request::input('email');
        $sex=Request::input('sex');
        $tell=Request::input('tell');
        //图片上传
        $files=Request::file('otherimg');
        if($files==null){
            $updates=DB::table('user')
                ->where('id', $id)
                ->update(array(
                    'username' => $name,
                    't_name' => $t_name,
                    'email' => $email,
                    'sex' => $sex,
                    'tell' => $tell,
                ));
            //var_dump($updates);die;
            if($updates){
                setcookie("name",$name,time()+3600*24*7);
                echo "<script>alert('完善个人信息成功');</script>";
                return redirect()->action('UserController@show');
            }
        }else{
            $clientName = $files ->  getClientOriginalName();
            //所以这里道出了文件上传的原理,将文件上传的某个临时目录中,然后使用Php的函数将文件移动到指定的文件夹.
            $entension = $files -> getClientOriginalExtension();   //上传文件的后缀.

            $filedir=$_SERVER['DOCUMENT_ROOT']."/uploads/user/";//上传存放的目录

            $newImagesName=md5(time()).rand(1000,9999).".".$entension; //重新命名上传文件名字
            $files->move($filedir,$newImagesName); //使用move 方法移动文件.
            //print_r($filedir) ;die;
            $update=DB::table('user')
                ->where('id', $id)
                ->update(array(
                    'username' => $name,
                    't_name' => $t_name,
                    'email' => $email,
                    'sex' => $sex,
                    'tell' => $tell,
                    'photos' => "uploads/user/".$newImagesName,
                ));
            if($update){
                $pictures="uploads/user/".$newImagesName;
               // print_r($pictures);die;
                setcookie("pictures",$pictures,time()+3600*24*7);
                setcookie("name",$name,time()+3600*24*7);
                echo "<script>alert('完善个人信息成功')</script>";
                return redirect()->action('UserController@show');
            }
        }
        return redirect()->action('UserController@show');

    }
    /**
     * 修改密码页面
     */
    public function password()
    {
        $username=$_COOKIE['name'];
        //$pwds=$_COOKIE['pwd'];
       // echo $pwds;die;
        $users = DB::table('user')->select()
            ->where(['username'=>$username])
            ->get();
        //var_dump($users);die;
        return view('user.password',["users"=>$users,"img"=>$_COOKIE['pictures'],"other_name"=>$username]);
    }
    /**
     * 验证密码与原密码
     */
    public function revert(){
        $revert=Request::get('p');
        //print_r($aa);die;
        $salt = substr($revert, 0, 2);
        $userPswd = crypt($revert, $salt);
        return $userPswd;

    }
    /**
     * 判断密码是否修改成功
     */
    public function modify(){
        //接收修改密码表单中的值
        $pwd=$_COOKIE['pwd'];
        $name=$_COOKIE['name'];
        $users = DB::table('user')->select()
            ->where(['username'=>$name])
            ->get();
        //var_dump($users);die;
        $id=$users[0]->id;
        $confirm_pwd=Request::input('confirm_pwd');
        $salt = substr($confirm_pwd, 0, 2);
        $userPswd = crypt($confirm_pwd, $salt);
        $update_pwd=DB::table('user')
            ->where('id', $id)
            ->update(array(
                'pwd' => $userPswd,
            ));
        if($update_pwd){
            setcookie("pwd",$userPswd,time()+3600*24*7);
            echo "<script>alert('修改密码成功');location.href='password'</script>";
            //return redirect()->action('UserController@password');
        }

    }
    /**
     * 我的收藏
     */
    public function collect()
    {
<<<<<<< Updated upstream
        if(empty($_COOKIE['name'])){
            //查看个人中心需要先进行登录
            return "<script>alert('请先登录');location.href='logins'</script>";
            //return redirect()->route('logins');
        }else{
            $name=$_COOKIE['name'];
            //$pwd=$_COOKIE['pwd'];
            $users = DB::table('user')->select()
                ->where(['username'=>$name])
                ->get();
            $posts['pages'] = DB::table('collect')->where(['username'=>$name])->paginate(2);
            return view('user.collect',["users"=>$users,"img"=>$_COOKIE['pictures'],"other_name"=>$name],$posts);
        }
=======
        $username=$_COOKIE['name'];
        //$pwds=$_COOKIE['pwd'];
        // echo $pwds;die;
        $users = DB::table('user')->select()
            ->where(['username'=>$username])
            ->get();
        //var_dump($users);die;
        return view('user.collect',["users"=>$users,"img"=>$_COOKIE['pictures'],"other_name"=>$username]);
>>>>>>> Stashed changes
    }
    /**
     * 我的评论
     */
    public function comment()
    {
        $username=$_COOKIE['name'];
        //$pwds=$_COOKIE['pwd'];
        // echo $pwds;die;
        $users = DB::table('user')->select()
            ->where(['username'=>$username])
            ->get();
        //var_dump($users);die;
        return view('user.comment',["users"=>$users,"img"=>$_COOKIE['pictures'],"other_name"=>$username]);
    }
}
