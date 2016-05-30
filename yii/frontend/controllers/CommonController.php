<?php

namespace frontend\controllers;
header("Content-Type:text/html;charset=utf-8");
use yii;
use frontend\models\Admin;
use frontend\models\Landlord;
use frontend\models\User;
use yii\web\Session;
use yii\web\Controller;
use yii\base\module;
use checkConfig;
/**
 * Class CommonController
 * @package frontend\controllers
 */
class CommonController extends \yii\base\Controller{
    /**
     * 防非法登录
     */
    public function __construct($id,$module,$config=[]){
        //非法登陆
        $this-> id =$id;
        $this-> module =$module;
        ///parent::__construct();
        $session = Yii::$app->session;
        $session->open();
        $name=$session->get("name");
       // echo $name;die;
        if(empty($name)){
            echo "<script>alert('请先登录.......');location.href='index.php?r=login/index'</script>";exit;
        }
    }
}
?>