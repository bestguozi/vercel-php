<?php

namespace backend\controllers;

use app\common\models\Category;
use app\common\models\Image;
use app\common\models\Search;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

class ImageController extends AuthController
{
    public function actionIndex()
    {
        $query = Image::find();

        $get = \Yii::$app->request->get();
        $search = new Search();
        $search->load($get);
        //where
        $query->where(['like', 'title', $search->title]);
        $count = $query->count();
        $page = new Pagination(['totalCount'=>$count, "defaultPageSize"=> 16]);
        //$page->limit = 16;
        $models = $query->orderBy(['id'=> SORT_DESC])->offset($page->offset)->limit($page->limit)->all();
        return $this->render('index', ['models'=>$models, 'search'=>$search, 'page'=>$page]);
    }

    /**
     * @return void
     */
    public function actionDisable(){
        if (\Yii::$app->request->isGet){
          $id = \Yii::$app->request->get("id");
          $status = \Yii::$app->request->get("status");
          if ($id){
              $val = intval($status) === 1 ? 1 : 0;
              $image = Image::findOne($id);
              $image->status = $val;
              $image->save();
          }
        } else if ( \Yii::$app->request->isPost) {
            $id_array = \Yii::$app->request->post("id");
            if(empty($id_array)){
                //Image::find()->where("id in", $id_array)->update()
            }
        } else {

        }
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionUpdate() {
        $category = Category::find()->asArray()->all();
        $categorys = ArrayHelper::map($category, 'id', 'category_name');

        $items = [];
        //update
        $id = \Yii::$app->request->get('id');
        if($id) {
            $model = Image::findOne($id);
            if($model == null) {
                return $this->redirect(\Yii::$app->urlManager->createUrl('image/index'));
            }
            $items = json_decode($model->image_list);
            $items = $items == null ? []: $items;
        } else {
            //create
            $model = new Image();
        }

        if(\Yii::$app->request->isPost) {
            $post = \Yii::$app->request->post();
            //shit
            $model->load($post);
            if($model->save()){
                return $this->redirect(\Yii::$app->urlManager->createUrl('image/index'));
            }
            $items = json_decode($model->image_list);
        }

        return $this->render('update',['model'=>$model, 'categorys'=>$categorys, 'items'=>$items]);
    }


}
