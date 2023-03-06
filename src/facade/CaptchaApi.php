<?php

namespace ew80\captcha\facade;

use think\Facade;

class CaptchaApi extends Facade
{
    protected static function getFacadeClass()
    {
        return \ew80\captcha\CaptchaApi::class;
    }
}
