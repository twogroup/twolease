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
class AdminController extends \yii\web\Controller
{
    public $layout = false;
    public function actionIndex()
    {
        $model = new Admin();
        return $this->renderPartial('login',['model'=>$model]);
    }
    //后台管理员登录
    public function actionLogin()
    {
        $connection = \Yii::$app->db;
        $request = Yii::$app->request;
        $name = $request->post('username');
        $pwd = $request->post('password');
        $command = $connection->createCommand("SELECT * FROM admin WHERE name='$name' and pwd='$pwd' ");
        $result = $command->queryOne();
        $name=$result['name'];
        //print_r($name);die;
        if($result)
        {
            $session = Yii::$app->session;
            $session['name'] = $name;
            //Yii::$app->getSession()->setFlash('success', '登录成功');
            return $this->redirect('index.php?r=admin/show');
        }
        else
        {
            echo "<script>alert('登录失败！');location.href='index.php?r=admin/index'</script>";
        }
    }
    //后台列表
    public function actionShow()
    {
        $session = Yii::$app->session;
        $name=$session['name'];
        return $this->render('index');
    }
    /*
     * 退出登录
     */
    public function actionExits(){
        //销毁存取的session
        $session = Yii::$app->session;
        unset($session['name']);
        return $this->redirect('index.php?r=admin/index');
    }
}
