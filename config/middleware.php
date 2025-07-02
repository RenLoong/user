<?php

return [
    '' => [
        app\middleware\Template::class,
        app\middleware\Access::class,
        app\middleware\Platform::class
    ],
    'admin' => [
        plugin\user\app\admin\middleware\Auth::class
    ]
];
