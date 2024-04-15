<?php
namespace common\errors;


use yii\base\BaseObject;

class ErrorCode extends BaseObject
{

    const MODEL_VALIDATE_ERROR = 1001;
    const MODEL_SAVE_ERROR = 1002;
    const MODEL_DELETE_ERROR = 1003;
    const MODEL_UPDATE_ERROR = 1004;
    const MODEL_FIND_ERROR = 1005;
    const MODEL_USER_NOT_FOUND = 1009;
    const MODEL_USER_NOT_LOGIN = 1010;
    const MODEL_USER_NOT_AUTH = 1011;
    const MODEL_USER_NOT_ADMIN = 1012;

    const Errors = [
        self::MODEL_VALIDATE_ERROR => '模型验证错误',
        self::MODEL_SAVE_ERROR => '模型保存错误',
        self::MODEL_DELETE_ERROR => '模型删除错误',
        self::MODEL_UPDATE_ERROR => '模型更新错误',
        self::MODEL_FIND_ERROR => '模型查询错误',
        self::MODEL_USER_NOT_FOUND => '用户不存在',
        self::MODEL_USER_NOT_LOGIN => '用户未登录',
        self::MODEL_USER_NOT_AUTH => '用户未授权',
        self::MODEL_USER_NOT_ADMIN => '用户不是管理员',
    ];
}