<?php

namespace frontend\controllers;
use yii;
use frontend\models\Community;
use yii\data\Pagination;
use yii\web\Session;
/**
*	class User  后台租客管理
*	张晨杰
*/
class CommunityController extends \yii\web\Controller
{
	public $layout = false;
    //显示帖子列表
    public function actionCommunity()
    {
    	//$model = new Community();
    	$query = Community::find();
        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('community', [
            'community' => $countries,
            'pagination' => $pagination,
        ]);
        //return $this->render('index');
    }

    //帖子列表的通过
    public function actionPass()
    {
        $request = \Yii::$app->request;
        $id = $request->get('id');
        //print_r($_GET);die;
        //echo $id;die;
        $pass = Community::findOne($id);
        $pass->state = '1';
        $pass->save();
        if($pass)
        {
            Yii::$app->getSession()->setFlash('success', '通过成功');
            return $this->redirect('index.php?r=community/community');
        }
        else
        {
            Yii::$app->getSession()->setFlash('error', '通过失败');
            return $this->redirect('index.php?r=community/community');
        }
    }

    //帖子列表的不通过
    public function actionFail()
    {
        $request = \Yii::$app->request;
        $id = $request->get('id');
        $fail = Community::findOne($id);
        $fail->state = '2';
        $fail->save();
        if($fail)
        {
            Yii::$app->getSession()->setFlash('success', '不通过成功');
            return $this->redirect('index.php?r=community/community');
        }
        else
        {
            Yii::$app->getSession()->setFlash('error', '不通过失败');
            return $this->redirect('index.php?r=community/community');
        }
    }

    // //帖子列表的查看
    // public function actionSelect()
    // {}

    // //帖子列表的修改
    // public function actionUpdate()
    // {}

    //帖子列表的删除
    public function actionDelete()
    {
        $request = \Yii::$app->request;
        $id = $request->get('id');
        $result = Community::findOne($id)->delete();
        if($result)
        {
            Yii::$app->getSession()->setFlash('success', '删除成功');
            return $this->redirect('index.php?r=community/community');
        }
        else
        {
            Yii::$app->getSession()->setFlash('error', '删除失败');
            return $this->redirect('index.php?r=community/community');
        }
    }

}
