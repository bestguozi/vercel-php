<?php

namespace common\models;



/**
 * This is the model class for table "user".
 */
class LoginForm extends \yii\base\Model
{
    public $username;
    public $password;

    private $access_token;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 256],
            [['username'], 'ValidateUser'],
        ];
    }

    /**
     * @param $attribute
     * @param $params
     * @return bool
     */
    public function ValidateUser($attribute, $params): bool
    {
        $user = User::findOne(['username'=>$this->$attribute]);
        if($user == null){
            $this->addError($attribute, 'Incorrect username or password?');
            return false;
        }
        if(!\Yii::$app->security->validatePassword($this->password, $user->password_hash)){
            $this->addError($attribute, 'Incorrect username or password.');
            return false;
        }
        if($user->status == 0){
            $this->addError($attribute, 'User is not active.');
            return false;
        }
        \Yii::$app->user->login($user);

        $this->access_token = $user->auth_key;
        //\Yii::$app->session->set('user', $reg);
        return true;
    }

    public function getAccessToken()
    {
        return $this->access_token;
    }
}