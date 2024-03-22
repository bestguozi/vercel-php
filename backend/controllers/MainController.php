<?php

namespace backend\controllers;

use backend\models\Log;
use common\models\User;
use backend\controllers\AuthController;
use yii\web\Controller;
class MainController extends AuthController
{
    public function actionIndex()
    {

        $user = User::findOne(["auth_key"=>\Yii::$app->request->headers->get('X-Api-Key')]);
        $log = Log::find()->where(['user_id'=>$user->id])->orderBy(['id'=>SORT_DESC])->one();
        $last_login = '';
        $ip = '';
        if($log){
            $last_login = $log->created_at;
            $ip = $log->ip;
        }
        return [
            'code'=>0,
            'message'=>'hello',
            'data'=>[
                'username'=>$user->username,
                'last_login'=>$last_login,
                'ip'=>$ip
                ]
        ];
    }

}
