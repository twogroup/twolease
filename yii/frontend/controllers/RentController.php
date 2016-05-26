<?php

namespace frontend\controllers;

use yii,DB;
use yii\db\Query;
use yii\data\Pagination;
use frontend\models\Rentsurvey;


/**
 * Class RentController
 * @package frontend\controllers
 * 任鹏
 */
class RentController extends \yii\web\Controller
{
    /**
     * @var bool
     */
    public $layout = false;

    /**
     * @return string
     */
    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }
    /**
     * @return string
     */
    public function actionTotal()
    {
        // 分页
        $query = Rentsurvey::find();
        $countQuery = clone $query;

        $pages = new Pagination(['totalCount' => $countQuery->count(),'defaultPageSize'=>5]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy('rent_id desc')
            ->all();

       // $rows = (new \yii\db\Query())->select('*')->from('rentsurvey')->all();
        return $this->render('rentTotal',[
            'list' => $models,
            'pages' => $pages,
        ]);
    }

    /**
     * @return yii\web\Response
     * @throws yii\db\Exception
     */
    public function actionDel(){

        $connection = \Yii::$app->db;
        $request = Yii::$app->request;
        $id = $request->get('id');

        $res=$connection->createCommand()->delete('rentsurvey', "rent_id = '$id'")->execute();
        if($res=='1'){
            return $this->redirect('index.php?r=rent/total');
        }else{
            echo "<script>alert('删除失败');</script>";
            return $this->redirect('index.php?r=rent/total');
        }


    }

    /**
     * @return string
     */
    public function actionUpdate()
    {
        $request = Yii::$app->request;
        $id = $request->get('id');

        $rows = (new \yii\db\Query())->select('*')->from('rentsurvey')->where(['rent_id'=>$id])->one();
        return $this->render('rentUpdate',['res'=>$rows]);
    }

    /**
     * @return yii\web\Response
     * @throws yii\db\Exception
     */
    public function actionUpadd(){
        $request = Yii::$app->request;
        $connection = \Yii::$app->db;
        $id = $request->post('id');
        $val = $request->post();

        $connection->createCommand()->update('rentsurvey', [
            'rent_people'     =>  $val['rent_people'],
            'by_rent_people'  =>  $val['by_rent_people'],
            'house_type'       =>  $val['house_type'],
            'rent_start_time' =>  $val['rent_start_time'],
            'rent_end_time'   =>  $val['rent_end_time'],
            'mon_rental'      =>   $val['mon_rental'],
            'rent_month'      =>   $val['rent_month'],
            'property_class' =>   $val['property_class'],
            'rent_money'      =>   $val['rent_money'],
            'other'            =>   $val['other']
        ], "rent_id = '$id'")->execute();
        return $this->redirect('index.php?r=rent/total');
    }

    /**
     * @return string
     * @throws yii\db\Exception
     */
    public function actionPdel(){
        $request = Yii::$app->request;
        $connection = \Yii::$app->db;

        $id = $request->get('id');
        $lastId = $request->get('last_id');
        $num=count(explode(',',$id)) ;
        $res=$connection->createCommand()->delete('rentsurvey', "rent_id in($id)")->execute();

       if($res){
           $re = (new \yii\db\Query())->select('*')
               ->from('rentsurvey')
               ->where("rent_id < '$lastId'")
               ->limit($num)
               ->all();

           echo json_encode($re);
       }else{
           return "1";
       }

    }
}
