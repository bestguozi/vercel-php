<?php

namespace backend\filters\auth;

use yii\filters\auth\CompositeAuth;
use yii\web\UnauthorizedHttpException;

class ExCompositeAuth extends CompositeAuth
{

    public function handleFailure($response)
    {
        throw new UnauthorizedHttpException("你没有登陆");
    }
}