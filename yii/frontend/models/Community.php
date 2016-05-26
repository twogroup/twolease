<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "community".
 *
 * @property integer $id
 * @property string $send
 * @property string $img
 * @property string $state
 * @property string $sendtime
 * @property string $content
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
            [['content'], 'string'],
            [['send'], 'string', 'max' => 20],
            [['img'], 'string', 'max' => 255],
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
            'img' => 'Img',
            'state' => 'State',
            'sendtime' => 'Sendtime',
            'content' => 'Content',
        ];
    }
}
