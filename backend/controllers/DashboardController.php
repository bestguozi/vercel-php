<?php

namespace backend\controllers;

use yii\web\Controller;

class DashboardController extends Controller
{

    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}