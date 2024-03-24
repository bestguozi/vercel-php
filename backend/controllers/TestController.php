<?php

namespace backend\controllers;


use backend\models\Log;
use common\models\User;


class TestController  extends \yii\web\Controller
{
    public function init()
    {
        parent::init();

    }
    public function behaviors()
    {
        return parent::behaviors(); // TODO: Change the autogenerated stub
    }

    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            // your custom code here
            return true;
        }
    }

    public function actionIndex() {
        return $this->renderPartial('index');
    }

    public function actionJs() {
        return $this->renderPartial('js');
    }

    public function actionPass(){
        return \Yii::$app->security->generatePasswordHash('123456');
    }

    public function actionAuth(){
        $model = User::findOne(["username"=>"user"]);
        \Yii::$app->user->login($model);
        echo \Yii::$app->user->id;

        $auth = \Yii::$app->authManager;
        $c = $auth->createPermission("createImage");
        $auth->add($c);
        $user = $auth->createRole("user");
        $auth->add($user);
        $auth->addChild($user, $c);
        $auth->assign($user, 3);
    }

    public function actionAuthtest(){
        if(\Yii::$app->user->can("create-Image")){
            echo "can";
        }else{
            echo "not can";
        }
    }

    public function actionLogout(){
        \Yii::$app->user->logout();
    }

    public function actionFun(){
         return $this->renderPartial('upload');
    }

    public function actionName()
    {
        echo \Yii::getAlias('@web');
        echo \Yii::getAlias("@webroot");
        echo \Yii::getAlias("@app");
    }

    public function actionEvent()
    {
        $foo = new Foo();
        $foo->on(Foo::EVENT_FOO_RUN_BEFORE, function(){
            echo "{before}";
        });
        $foo->on(Foo::EVENT_FOO_RUN_AFTER, function(){
            echo "{after}";
        });

        $foo->run();
    }
}