<?php

namespace jolalau\captcha\facade;

use think\Facade;

/**
 * CaptchaApi
 * @package jolalau\captcha\facade
 * @mixin \jolalau\captcha\Captcha
 */
class CaptchaApi extends Facade
{
    protected static function getFacadeClass()
    {
        return \jolalau\captcha\CaptchaApi::class;
    }
}
