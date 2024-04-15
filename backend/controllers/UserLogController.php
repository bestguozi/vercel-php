<?php

namespace backend\controllers;

use common\models\UserLog;
use yii\data\Pagination;


class UserLogController extends AuthController
{
    public function actionIndex()
    {
        $query = UserLog::find();
   
        $data = $this->request->get('search');
        if($data){
            $query->where(['like', 'data', $data]);
        }
        $count = $query->count();
        $pagination = new Pagination(['totalCount'=>$count, 'defaultPageSize'=>10]);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query->orderBy('id DESC'),
            'pagination' => $pagination,
        ]);
        return [
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

    public function actionView($id)
    {
        $model = UserLog::findOne($id);
        return [
            'code'=>0,
            'message'=>'获取成功',
            'data'=>$model,
        ];
    }

}
