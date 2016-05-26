<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property integer $rent_id
 * @property string $lname
 * @property string $title
 * @property string $area
 * @property string $community
 * @property double $pay
 * @property string $content
 * @property string $photo
 * @property string $contacts
 * @property integer $phone
 * @property integer $sourcetype
 * @property integer $lease
 * @property string $datetime
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pay'], 'number'],
            [['phone', 'sourcetype', 'lease'], 'integer'],
            [['datetime'], 'safe'],
            [['lname', 'title', 'area', 'community', 'contacts'], 'string', 'max' => 20],
            [['content', 'photo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rent_id' => 'Rent ID',
            'lname' => 'Lname',
            'title' => 'Title',
            'area' => 'Area',
            'community' => 'Community',
            'pay' => 'Pay',
            'content' => 'Content',
            'photo' => 'Photo',
            'contacts' => 'Contacts',
            'phone' => 'Phone',
            'sourcetype' => 'Sourcetype',
            'lease' => 'Lease',
            'datetime' => 'Datetime',
        ];
    }
}
