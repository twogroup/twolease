<?php
namespace frontend\controllers;
use yii;
use yii\web\Request;


class HouseController extends \yii\web\Controller
{
	//房源列表
    public function actionHouselist()
    {
        $connection = \Yii::$app->db;
    	$command = $connection->createCommand('SELECT * FROM house');
		$posts = $command->queryAll();
		//print_r($posts);die;
        return $this->render('index',array('ast'=>$posts));
    }
    //单删房源信息
    public function actionDel(){
    	$connection = \Yii::$app->db;
    	$request = Yii::$app->request;
    	$id = $request->get('id');
    	$delete = $connection->createCommand()->delete('house', 'rent_id = '.$id)->execute();
    	if ($delete) {
    		return $this->redirect('index.php?r=house/houselist');
    	}else{
    		echo "<script>alert('抱歉！删除失败');location.href='index.php?r=house/houselist'</script>";
    	}
    }
    //房源详细信息
    public function actionDetails(){
    	$connection = \Yii::$app->db;
    	$request = Yii::$app->request;
    	$id = $request->get('detailsid');
    	$command[] = $connection->createCommand('SELECT * FROM house WHERE rent_id='.$id)->queryOne();
    	//print_r($command);die; 
    	return $this->render('details',array('arr'=>$command));
    }

}
