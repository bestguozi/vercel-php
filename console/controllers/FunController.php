<?php

namespace console\controllers;

use yii\console\Controller;

class FunController extends Controller {

    public function actionDo()
    {
        echo \Yii::$app->security->generatePasswordHash('123456');
        return 0;
    }
}

?>