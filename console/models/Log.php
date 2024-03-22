<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log".
 *
 * @property int $id
 * @property string|null $event
 * @property int|null $user_id
 * @property string|null $data
 * @property string|null $url
 * @property string|null $ip
 * @property string|null $user_agent
 * @property int $created_at
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at'], 'integer'],
            [['data'], 'string'],
            [['created_at'], 'required'],
            [['event', 'url', 'ip', 'user_agent'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event' => 'Event',
            'user_id' => 'User ID',
            'data' => 'Data',
            'url' => 'Url',
            'ip' => 'Ip',
            'user_agent' => 'User Agent',
            'created_at' => 'Created At',
        ];
    }
}
