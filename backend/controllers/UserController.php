<?php

namespace backend\controllers;

use common\models\User;
use yii\data\Pagination;
use common\errors\ErrorCode;

class UserController extends AuthController
{

    /**
     * @return array
     */
    public function actionIndex()
    {
        $query = User::find();
   
        $username = $this->request->get('search');
        if($username){
            $query->where(['like', 'username', $username]);
        }
        $count = $query->count();
        $pagination = new Pagination(['totalCount'=>$count, 'defaultPageSize'=>10]);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query->orderBy('id DESC'),
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
        $model = User::findOne($id);
        return ['status'=>200, 'message'=>'获取成功','code'=>0, 'data'=>$model];
    }

    /**
     * @return array
     * @throws \yii\base\Exception
     */
    public function actionCreate()
    {
        $model = new User();
        $post['User'] = $this->request->post();
        if ($model->load($post)) {
            if($model->save()) {
                return ['status'=>200, 'message'=>'创建成功','code'=>0, 'data'=>$model];
            }
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
        $model = User::findOne($id);
        $model->load($this->request->post(), '');
        if ($model->save()) {
            return ['status'=>200, 'message'=>'修改成功','code'=>0, 'data'=>$model];
        }else{
            return ['status'=>200, 'code'=>ErrorCode::MODEL_VALIDATE_ERROR, 'message'=>$model->getErrors(), 'data'=>[]];
        }
    }

    /**
     * @param $id
     * @return int[]
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        User::findOne($id)->delete();
        return ['status'=>200, 'code'=>0, 'message'=>'删除成功'];
    }

    /**
     * @return int[]
     */
    public function actionLogout()
    {
        \Yii::$app->user->logout();
        return ['status'=>200, 'code'=>0, 'message'=>'退出成功'];
    }

    /**
     * @param $id
     * @return array|string|null
     * @throws \yii\base\Exception
     */
    public function actionResetKey($id)
    {
        $user = User::findOne($id);
        if ($user) {
            $user->auth_key = \Yii::$app->security->generateRandomString();
            $user->save();
            return ['status'=>200, 'code'=>0, 'message'=>'重置成功'];
        }
        return ['status'=>200, 'code'=>ErrorCode::MODEL_USER_NOT_FOUND, 'message'=>ErrorCode::Errors[ErrorCode::MODEL_USER_NOT_FOUND]];
    }

    //set user status
    public function actionSetStatus($id)
    {
        $user = User::findOne($id);
        if ($user) {
            $user->status = $user->status == 0 ? 1: 0;
            $user->save(false);
            return ['status'=>200, 'code'=>0, 'message'=>'修改成功'];
        }
        return ['status'=>200, 'code'=>ErrorCode::MODEL_USER_NOT_FOUND, 'message'=>ErrorCode::Errors[ErrorCode::MODEL_USER_NOT_FOUND]];
    }

    public function actionAllDown()
    {
        $ids = $this->request->post('ids');
        if(empty($ids)){
            return [];
        }
        User::updateAll(['status'=>0], ['in', 'id', $ids]);
        return ["code"=>0, "message"=>"修改成功", "data"=>[]];
    }

    public function actionAllUp()
    {
        $ids = $this->request->post('ids');
        if(empty($ids)){
            return [];
        }
        User::updateAll(['status'=>1], ['in', 'id', $ids]);
        return ["code"=>0, "message"=>"修改成功", "data"=>[]];
    }

}
