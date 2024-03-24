<?php

namespace common\services;

use yii\base\Component;

class Qiniu extends Component
{

    private $ak = '6F3Qxx7sp-BWexxGTgcLdukCRq7TCi-S6dGRIuzp';
    private $sk = 'U1LZv0goJ13XQ88mZ19bO9gk_xyPSh1Myp2BWood';

    private $bucket = '';

    function generateToken($bucket){
        $auth = new \Qiniu\Auth($this->ak, $this->sk);
        return $auth->uploadToken($bucket);
    }
}