<?php

namespace common\models;

class Upload extends \yii\base\Model
{

    public $imageFile;
    private $basePath;
    private $webPath = '/upload/';
    private $url = '';

    public function init(){
        $this->basePath = \Yii::getAlias('@webroot');
        //$this->basePath = $this->basePath . '/..';
        parent::init();
    }

    public function rules() {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg,gif']
        ];
    }

    public function upload()
    {
        if($this->validate()) {
            $web = $this->webPath . date("Ymd");
            $savePath = $this->basePath . $web;
            if(is_dir($savePath) == false){
                \mkdir($savePath);
            }
            $fileName = $this->imageFile->baseName . '.' .$this->imageFile->extension;
            $this->url = $web . '/' . $fileName;
            $file = $savePath . '/' . $fileName;
            $this->imageFile->saveAs($file);
            return true;
        }else{
            return false;
        }
    }

    public function getUrl() {
        return $this->url;
    }


}