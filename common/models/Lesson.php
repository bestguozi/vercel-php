<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wx_lesson".
 *
 * @property int $id
 * @property int $grade_id
 * @property int $book_id
 * @property string $lesson_name
 * @property string $lesson_content
 * @property string $lesson_image
 * @property string $create_at
 */
class Lesson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wx_lesson';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grade_id', 'book_id', 'lesson_name', 'lesson_content', 'lesson_image', 'create_at'], 'required'],
            [['grade_id','book_id'], 'integer'],
            [['lesson_content'], 'string'],
            [['create_at'], 'safe'],
            [['lesson_name'], 'string', 'max' => 32],
            [['lesson_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grade_id' => 'Grade',
            'book_id' => 'Book',
            'lesson_name' => 'Lesson Name',
            'lesson_content' => 'Lesson Content',
            'lesson_image' => 'Lesson Image',
            'create_at' => 'Create At',
        ];
    }

    public function getBook()
    {
        return $this->hasOne(Book::class, ['id'=>'book_id']);
    }

    public function getGrade()
    {
        return $this->hasOne(Grade::class, ['id'=>'grade_id']);
    }
}
