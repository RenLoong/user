<?php

use app\expose\enum\EventName;

return [
    EventName::WECHAT_OFFICIAL_ACCOUNT_SUBSCRLBE['value']=>[
        [\plugin\user\event\WECHAT_OFFICIAL_ACCOUNT::class,'subscribe']
    ],
    EventName::WECHAT_OFFICIAL_ACCOUNT_UNSUBSCRLBE['value']=>[
        [\plugin\user\event\WECHAT_OFFICIAL_ACCOUNT::class,'unsubscribe']
    ],
];