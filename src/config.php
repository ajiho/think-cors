<?php
return [

    //允许的域名
    'allow_origin' => [
        '*'
    ],

    //允许的请求头
    "allow_headers" => [
        'Origin',
        'X-Requested-With',
        'Content-Type',
        'Accept',
        'Authorization',
        'Cache-Control'
    ],

    //允许的方法
    "allow_methods" => [
        'GET',
        'POST',
        'PUT',
        'DELETE',
        'OPTIONS',
        'PATCH'
    ]
];
