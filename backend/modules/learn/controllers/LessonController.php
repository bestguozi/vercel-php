<?php

namespace backend\modules\learn\controllers;
use backend\modules\learn\models\Book;
use \common\models\Lesson;
use \yii\data\Pagination;
use \common\errors\ErrorCode;

class LessonController extends \backend\controllers\AuthController
{
     /**
     * @return array
     */
    public function actionIndex()
    {
        $bookId = $this->request->get('book_id');
        $query = \backend\modules\learn\models\Lesson::find()->where(['=', 'book_id', $bookId]);
        $lesson = $this->request->get('search');
        if($lesson){
            $query->where(['like', 'lesson_name', $lesson]);
        }
        $query->with('book');
        //$query->with('grade');
        $count = $query->count();
        
        $pagination = new Pagination(['totalCount'=>$count, 'defaultPageSize'=>10]);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
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

    /**
     * @param $id
     * @return array
     */
    public function actionView($id)
    {
        $model = Lesson::findOne($id);
        return ['status'=>200, 'message'=>'获取成功','code'=>0, 'data'=>$model];
    }

    /**
     * @return array
     * @throws \yii\base\Exception
     */
    public function actionCreate($book_id)
    {
        $book = Book::findOne($book_id);
        if($book == null){
            return ['code'=>ErrorCode::MODEL_VALIDATE_ERROR, 'message'=>'书籍不存在', 'data'=>[]];
        }
        $model = new Lesson();
        $post['Lesson'] = $this->request->post();
        $model->load($post);
        $model->created_at = date('Y-m-d H:i:s');
        $model->book_id = $book->id;
        if ($model->save()) {
           
            return ['status'=>200, 'message'=>'创建成功','code'=>0, 'data'=>$model];
          
        }
        return ['status'=>200, 'code'=>ErrorCode::MODEL_VALIDATE_ERROR, 'message'=>$model->getErrors(), 'data'=>[]];

    }

    /**
     * @param $id
     * @return array
     * @throws \yii\base\Exception
     */
    public function actionUpdate($id)
    {
        $model = Lesson::findOne($id);
        $post['Lesson'] = $this->request->post();
        $model->load($post);
        if ($model->save()) {
            return ['status'=>200, 'message'=>'修改成功','code'=>0, 'data'=>$model];
        }else{
            return ['status'=>200, 'code'=>ErrorCode::MODEL_VALIDATE_ERROR, 'message'=>$model->getErrors(), 'data'=>[]];
        }
    }

    /**
     * @param $id
     * @return array
     * @throws \yii\base\Exception
     */
    public function actionDelete($id){
        $model = Lesson::findOne($id);
        $model->delete();
        return ['status'=>200, 'code'=>0,'message'=>'删除成功','data'=>$model];
    }

}
