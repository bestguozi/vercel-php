<?php

namespace frontend\controllers;

use common\models\Book;
use common\models\Lesson;
use yii\rest\Controller;

class BookController extends Controller
{
    public function actionIndex($grade_id)
    {
        // Your code here
        $books = Book::find()->where(['grade_id'=>$grade_id])->all();
        return ['code'=>0,'message'=>'', 'data'=>$books];
    }

    public function actionDetail($id)
    {
        // Your code here
        $book = Book::find()->where(['id'=>$id])->one();
        return ['code'=>0,'message'=>'', 'data'=>$book];
    }
    public function actionLessons($book_id)
    {
        //写一个aec
        $lessons = Lesson::find()->where(['book_id'=>$book_id])->all();
        
        return ['code'=>0,'message'=>'', 'data'=>$lessons];
    }
}