<?php

namespace backend\modules\learn\models;

class Lesson extends \common\models\Lesson
{

    public function fields()
    {
        return [
            'id',
            'book_id',
            'grade_id',
            'lesson_name',
            'lesson_image',
            'book_name'=> function(){return $this->book->book_name;},
            'grade_name'=>function(){return $this->grade->grade_name;},
            'create_at'
        ];
    }
}