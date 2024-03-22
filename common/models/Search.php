<?php
namespace common\models;

class Search extends \yii\base\Model
{
    public $title="";

    public function rules() {
        return [
            [['title'], 'string']
        ];
    }
}