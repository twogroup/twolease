<?php

namespace frontend\models;

use Yii;
use yii\captcha\Captcha;

/**
 * This is the model class for table "admin".
 *
 * @property integer $admin_id
 * @property string $name
 * @property string $pwd
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $verifyCode;
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'pwd'], 'string', 'max' => 20],
            ['verifyCode', 'captcha','message'=>'验证码错误'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'name' => 'Name',
            'pwd' => 'Pwd',
        ];
    }
}
