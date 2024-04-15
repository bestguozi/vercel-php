<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wx_new_word".
 *
 * @property int $id
 * @property int $lesson
 * @property string $word
 * @property string $visualize
 * @property string $phrase
 */
class NewWord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wx_new_word';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson', 'word', 'visualize', 'phrase'], 'required'],
            [['lesson'], 'integer'],
            [['word'], 'string', 'max' => 1],
            [['visualize', 'phrase'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson' => 'Lesson',
            'word' => 'Word',
            'visualize' => 'Visualize',
            'phrase' => 'Phrase',
        ];
    }
}
