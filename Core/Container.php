<?php

namespace Core;

class Container{

    protected $bindings = [];

    public function bind($key,$resolver){
        $this->bindings[$key] = $resolver;

    }

    public function resolve($key){ //grab
        
        if(!array_key_exists($key, $this->bindings)){
            throw new \Exception('No matching {$key}');
        }


            $resolver = $this-> bindings[$key];

            return call_user_func($resolver);
        
    }
}