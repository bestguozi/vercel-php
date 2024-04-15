<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wx_book".
 *
 * @property int $id
 * @property int $grade_id
 * @property string $book_name
 * @property string $book_image
 * @property string $publish
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wx_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grade_id', 'book_name', 'book_image'], 'required'],
            [['grade_id'], 'integer'],
            [['book_name'], 'string', 'max' => 255],
            [['publish'], 'string', 'max' => 255],
            [['book_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grade_id' => 'Grade ID',
            'book_name' => 'Book Name',
            'book_image' => 'Book Image',
            'publish' => 'Publish',
        ];
    }

    public function getLessons()
    {
        return $this->hasMany(Lesson::class, ['book_id' => 'id']);
    }

    public function getGrade()
    {
        return $this->hasOne(Grade::class, ['id' => 'grade_id']);
    }
}
