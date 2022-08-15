<?php

namespace ajiho\middleware;

use think\facade\Config;

class Cors
{
    public function handle($request, \Closure $next)
    {

        header("Access-Control-Allow-Origin:" . implode(',', Config::get('cors.allow_origin')));
        header("Access-Control-Allow-Headers:" . implode(',', Config::get('cors.allow_headers')));
        header("Access-Control-Allow-Methods:" . implode(',', Config::get('cors.allow_methods')));
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            exit();
        }
        return $next($request);
    }
}