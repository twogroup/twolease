<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Http\Request;
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logins(){
        return view('html.login');
    }
    /**
     * 退出登录
     */
    public function exits(){
        setcookie("name", "", time() - 1);
        setcookie("pictures", "", time() - 1);
        setcookie("pwd", "", time() - 1);
        echo "<script>alert('退出成功！');location.href='show'</script>";
    }
}
