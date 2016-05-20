<?php

namespace frontend\controllers;
use yii;
use frontend\models\User;
use yii\data\Pagination;
/**
*	class User  后台租客管理
*/
class UserController extends \yii\web\Controller
{
	//租客列表显示
    public function actionShow()
    {
    	//查询租客列表的所数据
    	/*$user= (new \yii\db\Query())
    				->select('*')
    				->from('user')
    				->all();*/
    	//print_r($user);die;
        //return $this->render('user_list',['user'=>$user]);
        $query = User::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('user_list', [
            'user' => $countries,
            'pagination' => $pagination,
        ]);
    }

    //租客列表删除
    public function actionDelete()
    {
    	$request = \Yii::$app->request;
        $id = $request->get('id');
        $result = User::findOne($id)->delete();
        if($result)
        {
        	Yii::$app->getSession()->setFlash('success', '删除成功');
        	return $this->redirect('index.php?r=user/index');
        }
    	else
    	{
    		Yii::$app->getSession()->setFlash('error', '删除失败');
        	return $this->redirect('index.php?r=user/index');
    	}
    }

}
