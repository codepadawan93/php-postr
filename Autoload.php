<?php

function autoload($path, $top)
{
    $files = scandir($top);
    foreach($files as $file)
    {
        if($file === "." || $file === ".." || $file === __FILE__)
            continue;
        if(is_dir($file))
        {
            autoload($path . $file . DIRECTORY_SEPARATOR, $file);
        }
        else {
            if(substr($file, -3) === "php")
            {
                require_once($path . $file);
            }
        }
    }
}

autoload("", __DIR__);