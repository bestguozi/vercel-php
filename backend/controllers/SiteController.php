<?php

namespace backend\controllers;

use yii\rest\Controller;
/**
 * Site controller
 */
class SiteController extends Controller
{


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return ['site/index'];
    }



}
