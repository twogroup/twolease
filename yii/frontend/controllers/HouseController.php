<?php
namespace frontend\controllers;
use yii;
use yii\web\Request;
/*
*   class house 后房源管理
*   韦森
*/

class HouseController extends \yii\web\Controller
{
    public $layout = false;
	//房源列表
    public function actionHouselist()
    {
        $connection = \Yii::$app->db;
    	$command = $connection->createCommand('SELECT * FROM availability');
		$posts = $command->queryAll();
		//print_r($posts);die;
        return $this->render('index',array('ast'=>$posts));
    }
    //单删房源信息
    public function actionHousedelete(){
    	$connection = \Yii::$app->db;
    	$request = Yii::$app->request;
    	$id = $request->get('id');
    	$delete = $connection->createCommand()->delete('availability', 'ava_id = '.$id)->execute();
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
    //修改房源信息
    public function actionHouseupload(){
        $connection = \Yii::$app->db;
        $request = Yii::$app->request;
        $id = $request->get('id');
        $command[] = $connection->createCommand('SELECT * FROM availability WHERE ava_id='.$id)->queryOne();
        //print_r($command);die;
        return $this->render('houseupload',array('arr'=>$command));
    }
    public function actionUploadadd(){
        $connection = \Yii::$app->db;
        $request = Yii::$app->request;
        $data = $request->post();
        //print_r($data);die;
        $id = $data['id'];
        $house_address = $data['house_address'];
        $linkman = $data['linkman'];
        $house_title = $data['house_title'];
        $house_postion = $data['house_postion'];
        $pay = $data['pay'];
        $house_desc = $data['house_desc'];
        $phone = $data['phone'];
        $house_type = $data['house_type'];
        $uploadOk = $connection->createCommand()->update('availability', [
            'house_address' => $house_address,
            'linkman' => $linkman,
            'house_title' => $house_title,
            'house_postion' => $house_postion,
            'pay' => $pay,
            'house_desc' => $house_desc,
            'phone' => $phone,
            'house_type' => $house_type,
        ], "ava_id = '$id'")->execute();
        if ($uploadOk) {
            return $this->redirect('index.php?r=house/houselist');
        }else{
            echo "<script>alert('抱歉！提交失败');location.href='index.php?r=house/houselist</script>";
        }
    }
}
