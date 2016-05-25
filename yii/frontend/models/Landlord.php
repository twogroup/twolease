<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "landlord".
 *
 * @property integer $l_id
 * @property string $lname
 * @property string $lpwd
 * @property string $lemail
 * @property integer $rent_id
 * @property string $lphone
 * @property string $lphoto
 */
class Landlord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landlord';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rent_id'], 'integer'],
            [['lname', 'lpwd', 'lemail', 'lphone'], 'string', 'max' => 20],
            [['lphoto'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'l_id' => 'L ID',
            'lname' => 'Lname',
            'lpwd' => 'Lpwd',
            'lemail' => 'Lemail',
            'rent_id' => 'Rent ID',
            'lphone' => 'Lphone',
            'lphoto' => 'Lphoto',
        ];
    }
}
