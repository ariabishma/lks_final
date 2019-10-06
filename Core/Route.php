<?php
namespace Core;

class Route{
    public function MiddlewareDriver($met,$mid=[]){
        $next = true;
        if($mid){
            $next = false;
        }
        foreach ($mid as $value) {
            $m = new $value();
            $next = $m->Run();
        }
    
        // var_dump($met);
        if($next){
           $c = new $met[0]();
          return  $c->{$met[1]}();
        }

        return false;
    }
    
}