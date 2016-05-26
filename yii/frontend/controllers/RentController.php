<?php

namespace frontend\controllers;
use yii;
use yii\web\Request;

class RentController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    //房源资源列表
    public function actionHousing(){
    	$connection = \Yii::$app->db;
    	$command = $connection->createCommand('SELECT * FROM rent');
		$posts = $command->queryAll();
        //print_r($posts);die;
        return $this->render('index',array('ast'=>$posts));
    }
    //单删房源信息
    public function actionDel(){
    	$connection = \Yii::$app->db;
    	$request = Yii::$app->request;
    	$id = $request->get('id');
    	$delete = $connection->createCommand()->delete('rent', 'rent_id = '.$id)->execute();
    	if ($delete) {
    		return $this->redirect('index.php?r=rent/housing');
    	}else{
    		echo "<script>alert('抱歉！删除失败');location.href='index.php?r=rent/housing'</script>";
    	}
    }
    //房源详细信息
    public function actionDetails(){
    	$connection = \Yii::$app->db;
    	$request = Yii::$app->request;
    	$id = $request->get('detailsid');
    	$command[] = $connection->createCommand('SELECT * FROM rent WHERE rent_id='.$id)->queryOne();
    	return $this->render('details',array('arr'=>$command));
    }

}
