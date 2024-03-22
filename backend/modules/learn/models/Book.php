<?php 
namespace backend\modules\learn\models;

/**
 * This is the model
 *
 * @property integer $id
 * @property integer $grade_id
 * @property string $book_name
 * @property string $book_image
 * @property string $publish
 */
class Book extends \common\models\Book{

    public function fields()
    {
        return [
            'id',
            'grade_id',
            'book_name',
            'book_image',
            'publish',
            'grade'=>function($model){
                return $model->grade->grade_name;
            }
        ];
    }
}