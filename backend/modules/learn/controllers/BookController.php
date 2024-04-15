<?php 
namespace backend\modules\learn\controllers;

use \common\models\Book;
use \common\errors\ErrorCode;
use \yii\data\Pagination;
class BookController extends \backend\controllers\AuthController{

    public function actionIndex()
    {
       
        $query = \backend\modules\learn\models\Book::find();
        $lesson = $this->request->get('search');
        if($lesson){
            $query->where(['like', 'book_name', $lesson]);
        }

        $count = $query->count();
        
        $pagination = new Pagination(['totalCount'=>$count, 'defaultPageSize'=>10]);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query->with('grade'),
            'pagination' => $pagination,
        ]);
        return [
            'status'=>200,
            'code'=>0,
            'message'=>'获取成功',
            'data'=>$dataProvider,
            'pagination'=>[
                'total'=>$pagination->totalCount,
                'page'=>$pagination->getPage(),
                'page_count'=>$pagination->pageCount,
                'page_size'=>$pagination->getPageSize()
            ]
        ];
    }


    public function actionCreate()
    {
        $model = new Book();
        $post = $this->request->post();
        $ret = $model->load(['Book'=>$post]);
        if($model->validate() === false){
            return [
                'status'=>200,
                'code'=>ErrorCode::MODEL_VALIDATE_ERROR,
                'message'=>$model->getFirstErrors()
            ];
        }
        if($model->save() == false){
            return [
               'status'=>200,
                'code'=>ErrorCode::MODEL_SAVE_ERROR,
               'message'=>$model->getFirstErrors()
            ];
        }
        return [
            'status'=>200,
            'code'=>0,
            'message'=>'添加成功'
        ];
    }

    public function actionUpdate($id)
    {
        $book = Book::findOne($id);
        $book->load(['Book'=>$this->request->post()]);
        if($book->validate() === false){
            return [
               'status'=>200,
                'code'=>ErrorCode::MODEL_VALIDATE_ERROR,
               'message'=>$book->getFirstErrors()
            ];
        }
        if($book->save() == false){
            return [
              'status'=>200,
                'code'=>ErrorCode::MODEL_SAVE_ERROR,
              'message'=>$book->getFirstErrors()
            ];
        }
        return [
         'status'=>200,
            'code'=>0,
         'message'=>'修改成功'
        ];
    }

    public function actionView($id)
    {
        //$id = $this->request->get('id');
        $book = Book::findOne($id);
        return [
          'status'=>200,
            'code'=>0,
          'message'=>'获取成功',
            'data'=>$book
        ];
    }

    public function actionDelete()
    {
        $book = Book::findOne($this->request->post('id'));
        if($book->delete() == false){
            return [
              'status'=>200,
                'code'=>ErrorCode::MODEL_DELETE_ERROR,
              'message'=>$book->getFirstErrors()
            ];
        }
        return [
          'status'=>200,
            'code'=>0,
          'message'=>'删除成功'
        ];
    }
}