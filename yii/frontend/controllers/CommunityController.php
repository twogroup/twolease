<?php

namespace frontend\controllers;
use yii;
use frontend\models\Community;
use yii\data\Pagination;
/**
*	class User  后台租客管理
*	张晨杰
*/
class CommunityController extends \yii\web\Controller
{
	public $layout = false;
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

        return $this->render('index', [
            'community' => $countries,
            'pagination' => $pagination,
        ]);
        //return $this->render('index');
    }

}
