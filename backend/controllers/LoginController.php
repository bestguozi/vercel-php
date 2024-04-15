<?php

namespace backend\controllers;

use backend\models\UserLog;
use common\models\LoginForm;
use yii\web\ForbiddenHttpException;

/**
 *
 */
class LoginController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    /**
     * @return false|string|void
     */
    public function actionIndex()
    {
        if (\Yii::$app->request->isPost) {
            $post = \Yii::$app->request->post();
            //$post['LoginForm'] = $post;
            $user = new LoginForm();
            $user->load($post,'');
            if ($user->validate()) {
                UserLog::userLogin();
                return json_encode(['code'=>0,  'status'=>200, 'message'=>'登陆成功', 'data'=>['name'=>$user->username,'access_token'=>$user->getAccessToken()]]);
            } else {
                $error = $user->getErrors();
                return json_encode(['code'=>1, 'status'=>401, 'message'=>'登陆失败', 'data'=>$error]);
            }
        }
    }
}
