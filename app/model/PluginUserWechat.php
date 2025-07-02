<?php

namespace plugin\user\app\model;

use app\model\Basic;

class PluginUserWechat extends Basic
{
    public function getNicknameAttr($value)
    {
        return base64_decode($value);
    }
    public function setNicknameAttr($value)
    {
        return base64_encode($value);
    }
}
