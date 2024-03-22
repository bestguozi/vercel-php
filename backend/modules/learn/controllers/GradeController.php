<?php

namespace backend\modules\learn\controllers;

use backend\controllers\AuthController;
use common\models\Grade;
class GradeController extends AuthController
{
    public function actionIndex()
    {
        $grades = Grade::find()->all();
        return ['code'=>0, 'message'=>'获取成功', 'data'=>$grades];
    }

    public function actionDetail($id)
    {
        $grade = Grade::find()->where(['id'=>$id])->one();
        return ['status'=>200, 'code'=>0, 'message'=>'获取成功', 'data'=>$grade];
    }

}