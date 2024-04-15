<?php

namespace backend\controllers;

use app\common\models\Category;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

class CategoryController extends AuthController
{
    public function actionIndex()
    {
        $query = Category::find();
        $count = $query->count();
        $page = new Pagination(['totalCount'=>$count, "defaultPageSize"=> 16]);
        //$page->limit = 16;
        $models = $query->orderBy(['id'=> SORT_DESC])->offset($page->offset)->limit($page->limit)->all();
        return $this->render('index', ['models'=>$models, 'page'=>$page]);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionUpdate() {
        $category = Category::find()->asArray()->all();
        $categorys = ArrayHelper::map($category, 'id', 'category_name');

        //update
        $id = \Yii::$app->request->get('id');
        if($id) {
            $model = Category::findOne($id);
            if($model == null) {
                return $this->redirect(\Yii::$app->urlManager->createUrl('category/index'));
            }
        } else {
            //create
            $model = new Category();
        }
        if(\Yii::$app->request->isPost) {
            $post = \Yii::$app->request->post();
            $model->load($post);
            if($model->save()){
                return $this->redirect(\Yii::$app->urlManager->createUrl('category/index'));
            }
        }

        return $this->render('update',['model'=>$model, 'categorys'=>$categorys]);
    }
}
