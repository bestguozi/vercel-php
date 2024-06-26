<?php
namespace frontend\controllers;

use yii\rest\Controller;
use common\models\Book;
use common\models\Grade;
use common\models\Lesson;

class GradeController extends Controller
{
    public function actionIndex()
    {
        // Your code here
        $grades = Grade::find()->all();
        return ['code'=>0, 'message'=>'', 'data'=>$grades];
    }

    public function actionDetail($id)
    {
        // Your code here
        $grade = Grade::find()->where(['id'=>$id])->one();
        return ['code'=>0, 'message'=>'', 'data'=>$grade];
    }

    public function actionBooks($grade_id)
    {
        // Your code here
        $books = Book::find()->where(['grade_id'=>$grade_id])->all();
        return ['code'=>0,'message'=>'', 'data'=>$books];
    }

    public function actionBookDetail($book_id)
    {
        // Your code here
        $book = Book::find()->where(['id'=>$book_id])->one();
        return ['code'=>0,'message'=>'', 'data'=>$book];
    }

    public function actionBook($book_id)
    {
        $book = Book::findOne($book_id);
        // Your code here
        $lessons = Lesson::find()->where(['book_id'=>$book_id])->all();
        return ['code'=>0,'message'=>'', 'data'=>['book'=>$book, 'lessons'=>$lessons]];
    }

}
