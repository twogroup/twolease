<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "community".
 *
 * @property integer $id
 * @property string $send
 * @property string $photo
 * @property string $state
 * @property string $sendtime
 */
class Community extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'community';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sendtime'], 'safe'],
            [['send'], 'string', 'max' => 20],
            [['photo'], 'string', 'max' => 50],
            [['state'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'send' => 'Send',
            'photo' => 'Photo',
            'state' => 'State',
            'sendtime' => 'Sendtime',
        ];
    }
}
