<?php

namespace frontend\controllers;
use frontend\models\Landlord;
use yii\data\Pagination;
use yii;
/**
*	class User  后台房东管理
*/
class LandlordController extends \yii\web\Controller
{
	//房东列表显示
    public function actionShow()
    {
    	//$connection = \Yii::$app->db;
    	//查询房东列表的所数据
    	/*$landlord= (new \yii\db\Query())
    				->select('*')
    				->from('landlord')
    				->all();*/
    	//print_r($landlord);die;
    	$query = User::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->where('status = 1')
            ->all();

        return $this->render('landlord_list', [
            'landlord' => $countries,
            'pagination' => $pagination,
        ]);

        //return $this->render('landlord_list',['landlord'=>$landlord]);
    }
    //房东列表删除
    public function actionDelete()
    {
    	$request = \Yii::$app->request;
        $id = $request->get('id');
        $result = User::findOne($id)->where('status = 1')->delete();
        if($result)
        {
        	Yii::$app->getSession()->setFlash('success', '删除成功');
        	return $this->redirect('index.php?r=landlord/index');
        }
    	else
    	{
    		Yii::$app->getSession()->setFlash('error', '删除失败');
        	return $this->redirect('index.php?r=landlord/index');
    	}
    }

}
