<?php

namespace Core\Middleware;

class Middleware{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class,
    ];
    public static function resolve($key){
        if(!$key){
            return;
        }
        $middleware = static::MAP[$key]?? false; // create false if no corresponding value
        if(!$middleware){
            throw new\Exception("No matching middleware for {$key}");
        }
        (new $middleware)->handle();
    }
}

?>