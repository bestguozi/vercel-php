<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wx_grade".
 *
 * @property int $id
 * @property string $grade_name
 */
class Grade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wx_grade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grade_name'], 'required'],
            [['grade_name'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grade_name' => 'Grade Name',
        ];
    }
}
