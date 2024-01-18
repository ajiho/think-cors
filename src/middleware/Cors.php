<?php

namespace ajiho\middleware;

use think\facade\Config;

class Cors
{
    public function handle($request, \Closure $next)
    {
        $Origin = in_array('*',Config::get('cors.allow_origin'))?'*':'';
        if (in_array($request->server('HTTP_ORIGIN'), Config::get('cors.allow_origin'))) {
            $Origin = $request->server('HTTP_ORIGIN');
        }
        header('Access-Control-Allow-Origin:'.$Origin);
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Headers:" . implode(',', Config::get('cors.allow_headers')));
        header("Access-Control-Allow-Methods:" . implode(',', Config::get('cors.allow_methods')));
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            exit();
        }
        return $next($request);
    }
}