<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $pwd
 * @property string $status
 * @property string $photos
 * @property string $tell
 * @property string $email
 * @property integer $rent_id
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rent_id'], 'integer'],
            [['username', 'pwd', 'status', 'photos', 'tell', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'pwd' => 'Pwd',
            'status' => 'Status',
            'photos' => 'Photos',
            'tell' => 'Tell',
            'email' => 'Email',
            'rent_id' => 'Rent ID',
        ];
    }
}
