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
    	$command = $connection->createCommand('SELECT * FROM house');
		$posts = $command->queryAll();
		//print_r($posts);die;
        return $this->render('index',array('ast'=>$posts));
    }
    //单删房源信息
    public function actionHousedelete(){
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
    //修改房源信息
    public function actionHouseupload(){
        $connection = \Yii::$app->db;
        $request = Yii::$app->request;
        $id = $request->get('id');
        $command[] = $connection->createCommand('SELECT * FROM house WHERE rent_id='.$id)->queryOne();
        return $this->render('houseupload',array('arr'=>$command));
    }
    public function actionUploadadd(){
        $connection = \Yii::$app->db;
        $request = Yii::$app->request;
        $data = $request->post();
        //print_r($data);die;
        $id = $data['id'];
        $contacts = $data['rent_people'];
        //print_r($contacts);die;
        $community = $data['by_rent_people'];
        $area = $data['house_type'];
        $pay = $data['mon_rental'];
        $content = $data['property_class'];
        $phone = $data['rent_money'];
        $uploadOk = $connection->createCommand()->update('house', [
            'contacts' => $contacts,
            'community' => $community,
            'area' => $area,
            'pay' => $pay,
            'content' => $content,
            'phone' => $phone,
        ], "rent_id = '$id'")->execute();
        if ($uploadOk) {
            return $this->redirect('index.php?r=house/houselist');
        }else{
            echo "<script>alert('抱歉！提交失败');location.href='index.php?r=house/houselist</script>";
        }
    }

}
