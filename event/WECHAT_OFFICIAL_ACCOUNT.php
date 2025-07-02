<?php
namespace plugin\user\event;

use app\expose\enum\State;
use app\expose\helper\Config;
use plugin\user\app\model\PluginUser;
use plugin\user\app\model\PluginUserWechat;

class WECHAT_OFFICIAL_ACCOUNT
{
    public function subscribe(mixed $data)
    {
        $UserWechat=PluginUserWechat::where('openid',$data['FromUserName'])->find();
        if($UserWechat)
        {
            $UserWechat->subscribe=State::YES['value'];
            $UserWechat->save();
            if($UserWechat->uid){
                // $User=PluginUser::where('id',$UserWechat->uid)->find();
                // return $this->replyText($data,'欢迎回来：'.$User->nickname);
            }
            // return $this->replyText($data,'欢迎关注：'.$UserWechat->nickname);
        }
        $UserWechat=new PluginUserWechat();
        $UserWechat->openid=$data['FromUserName'];
        $UserWechat->subscribe=State::YES['value'];
        $UserWechat->save();
    }
    public function unsubscribe(mixed $data)
    {
        $UserWechat=PluginUserWechat::where('openid',$data['FromUserName'])->find();
        if($UserWechat)
        {
            $UserWechat->subscribe=State::NO['value'];
            $UserWechat->save();
        }
    }
}