<?php

namespace app\modules\home\controllers;

use yii\rest\Controller;
use app\models\WxLesson;

class LessonController extends Controller
{
    public function actionIndex()
    {
        // Your code here
        $models = WxLesson::find()->limit(5)->orderBy('id desc')->all();

        return ['status'=>200, 'code'=>'0', 'message'=>'获取成功', 'data'=>$models];
    }

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function actionView($id)
    {
        $model = WxLesson::findOne($id);
        
        return ['status'=>200, 'code'=>0, 'message'=>'', 'data'=>$model];
    }
}
