<?php

namespace frontend\controllers;

use yii\rest\Controller;
use common\models\Lesson;

class LessonController extends Controller
{
    public function actionIndex()
    {
        // Your code here
        $models = Lesson::find()->limit(5)->orderBy('id desc')->all();

        return [ 'code'=>0, 'message'=>'获取成功', 'data'=>$models];
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     *
     */
    public function actionView($id)
    {
        $model = Lesson::findOne($id);
        
        return ['code'=>0, 'message'=>'', 'data'=>$model];
    }
}
