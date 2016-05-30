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
class AdminController extends CommonController
{
    public $layout = false;
    //后台列表
    public function actionShow()
    {
        //echo 12333;die;
        $session = Yii::$app->session;
        $name=$session['name'];
        return $this->render('index');
    }
}
