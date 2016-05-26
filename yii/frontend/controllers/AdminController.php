<?php

namespace frontend\controllers;
header('content-type:text/html;charset=utf-8');
use yii;
use frontend\models\Admin;
use frontend\models\Landlord;
use frontend\models\User;
use yii\web\Session;
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
            Yii::$app->getSession()->setFlash('success', '登录成功');
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
        return $this->render('index',['name'=>$name]);
    }
    
    //添加房东
   /* public function actionAddlandlord()
    {
        $model = new Landlord();
        return $this->render('add_landlord');
    }*/
    
    //房东列表
    public function actionLandlordlist()
    {
        //$model = new Landlord();
        return $this->redirect('index.php?r=user/landlord');
    }
    
    //添加租客
  /*  public function actionAdduser()
    {
        $model = new User();
        return $this->render('add_user');
    }*/
    
    //租客列表
    public function actionUserlist()
    {
        //$model = new User();
        return $this->redirect('index.php?r=user/user');
    }

    //贴子管理
    public function actionCommunity()
    {
        return $this->redirect('index.php?r=community/community');
    }
    /**
     * 退出登录
     */
    public function actionExits(){
        //销毁存取的session
        $session = Yii::$app->session;
        unset($session['name']);
        return $this->redirect('index.php?r=admin/index');
    }

}
