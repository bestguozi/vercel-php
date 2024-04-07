<?php

namespace backend\controllers;

use common\models\Upload;
use yii\data\Pagination;
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

    public function actionUploadToken() {
        $service = new \common\services\Qiniu();
        $key = \Yii::$app->security->generateRandomString(32);
        $model = new \backend\models\Upload();
        $model->key = $key;
        $model->ip = \Yii::$app->request->userIP;
        $model->save();
        return [
            'code'=>0,
            'message'=>'',
            'token'=>$service->generateToken('any-site'),
            'key' => $key,
        ];
    }

    public function actionSave() {
        $model = new \backend\models\Upload();
        $model->key = $this->request->post('key');
        $model->ip = \Yii::$app->request->userIP;
        if($model->save()){
            return ['code'=>0, 'message'=>'upload ok', 'data'=>['image_url'=>$model->key]];
        }else{
            return ['code'=>20001, 'message'=>$model->getErrors(), 'data'=>[]];
        }
    }

    public function actionUploadList()
    {
        $query = \backend\models\Upload::find();
        $pagination = new Pagination(['totalCount'=>$query->count(), 'defaultPageSize'=>10]);

        return [
            'code'=>0,
            'message'=>'',
            'data'=>$query->all(),
            'pagination'=>[
                'total'=>$pagination->totalCount,
                'page'=>$pagination->getPage(),
                'page_count'=>$pagination->pageCount,
                'page_size'=>$pagination->getPageSize()
        ]];
    }
}