
# think-cors

是一个用于解决前后端分离thinkphp6输出API时产生跨域问题的简单中间件。

# 安装

~~~
composer require ajiho/think-cors
~~~

# 优点

虽然代码量不多，而且也很简单，抽离出来通过composer方式安装，通过配置文件的方式解决跨域问题变得很简单，多个项目也能复用，同时后期维护也比较简单。

# 配置

/config/cors.php

```php
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
```

# 使用

和tp6的中间件用法一样

```php
\ajiho\middleware\Cors::class
```


