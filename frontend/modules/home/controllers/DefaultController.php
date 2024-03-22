<?php

namespace app\modules\home\controllers;

use app\models\WxLesson;
use yii\rest\Controller;

/**
 * Default controller for the `home` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $books = \app\models\WxBook::find()->with('lessons')->all();

        foreach($books as $book){
            var_dump($book->lessons);
        }
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
