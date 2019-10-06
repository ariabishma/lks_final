<?php
spl_autoload_register(function($class){
    $path = join(DIRECTORY_SEPARATOR,explode("\\",$class));
    require BASE_DIR.'/'.$path.".php";
});