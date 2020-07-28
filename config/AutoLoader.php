<?php

class AutoLoader{
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class){
     
        //echo str_replace('\\', '/', $class); 
            // var_dump(file_exists("../".str_replace('\\', '/', $class.".class.php")));   

       if(file_exists('model/'.$class.".php")){ 

            require_once 'model/'.$class.".php";

       }else if(file_exists('entities/'.$class.".php")){
 
             require_once 'entities/'.$class.".php";

       }else if(file_exists("../".str_replace('\\', '/', $class.".php"))){
            require_once "../".str_replace('\\', '/', $class.".php"); 

       } else if(file_exists("../".str_replace('\\', '/', $class.".php"))){
            require_once "../".str_replace('\\', '/', $class.".php"); 

        }else if(file_exists(str_replace('\\', '/', $class.".php"))){
            require_once str_replace('\\', '/', $class.".php"); 

        } else if(file_exists(str_replace('\\', '/', $class.".php"))){
            require_once str_replace('\\', '/', $class.".php"); 
        }

       
    }
   

} 

AutoLoader::register();
