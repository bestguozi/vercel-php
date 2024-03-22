<?php

namespace backend\controllers;

use common\models\Upload;
use yii\web\UploadedFile;

class UploadController extends AuthController
{
    public $enableCsrfValidation = false;
    public function actionFile() {
        $model = new Upload();
        if(\Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if($model->upload()){
                $host = \Yii::$app->request->hostInfo;
                return ['status'=>200, 'code'=>0, 'message'=>'upload ok', 'data'=>['image_url'=>$host . $model->getUrl()]];
            }else{
                return ['status'=>200, 'code'=>20001, 'message'=>$model->getErrors(), 'data'=>[]];
            }
        }
    }
}