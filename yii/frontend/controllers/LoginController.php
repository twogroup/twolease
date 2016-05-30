<?php

namespace frontend\controllers;
use yii;
use frontend\models\Admin;
use frontend\models\Landlord;
use frontend\models\User;
use yii\web\Session;
/*
*   class admin 后台管理员登录控制器
*
*
*/
class LoginController extends \yii\base\Controller
{
    public $layout = false;
    public function actionIndex()
    {
        $model = new Admin();
        return $this->renderPartial('login',['model'=>$model]);
    }
    //后台管理员登录
    public function actionEntry()
    {
        //echo 1222222222;die;
        $connection = \Yii::$app->db;

        $request = Yii::$app->request;
        //print_r($connection);die;
        $name = $request->post('u_name');
        $pwd = $request->post('p_pwd');
        //echo $pwd;die;
        $command = $connection->createCommand("SELECT * FROM admin WHERE name='$name' and pwd='$pwd' ");
        $result = $command->queryOne();
        $names=$result['name'];
        //print_r($result);die;
        if($names==$name)
        {
            if($result['pwd']==$pwd){
                $session = Yii::$app->session;
                $session['name'] = $name;
                //Yii::$app->getSession()->setFlash('success', '登录成功');
                echo "<script>alert('登录成功！');location.href='index.php?r=admin/show'</script>";
                // return $this->redirect('index.php?r=admin/show');
            }else{
                echo "<script>alert('登录失败！');location.href='index.php?r=login/index'</script>";
            }

        }
        else
        {
        }
    }
    /*
     * 退出登录
     */
    public function actionExits(){
        //销毁存取的session
        $session = Yii::$app->session;
        unset($session['name']);
        echo "<script>alert('退出成功！');location.href='index.php?r=login/index'</script>";
       // return $this->redirect('index.php?r=login/index');
    }
}
