<?php

namespace frontend\controllers;
use yii;
use frontend\models\Admin;


class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$model = new Admin();
        return $this->renderPartial('login',['model'=>$model]);
    }
    //后台管理员登录
    public function actionLogin()
    {
        //echo 123;
    	$connection = \Yii::$app->db;
        $request = Yii::$app->request;
        $name = $request->post('username'); 
    	//$name = Yii::$app->request->post('username');
    	$pwd = $request->post('password');
    	//echo $pwd;
    }
    //后台列表
    public function actionShow(){}

}
