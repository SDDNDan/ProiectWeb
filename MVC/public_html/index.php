<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/19/2018
 * Time: 11:20 PM
 */

error_reporting(E_ALL & ~E_NOTICE);
define('ROOT',dirname(__DIR__).DIRECTORY_SEPARATOR);
define('APP',ROOT.'app'.DIRECTORY_SEPARATOR);
define('CONTROLLER',APP.'controllers'.DIRECTORY_SEPARATOR);
define('MODELS',APP.'models'.DIRECTORY_SEPARATOR);
define('VIEWS',APP.'views'.DIRECTORY_SEPARATOR);
define('CORE',APP.'core'.DIRECTORY_SEPARATOR);


$modules = [ROOT,APP,CONTROLLER,MODELS,VIEWS,CORE];
#set_include_path Make acces to the files
#implode Create from array a string
#explode Create from string an array

set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
#Search all the classes for the controllers,views,models...
#Find automatic all the classes
spl_autoload_register(function ($className){
   if(file_exists(CORE.$className.'.php'))
   {

       include_once CORE.$className.'.php';

   }
   elseif (file_exists(MODELS.$className.'.php'))
   {
       include_once MODELS.$className.'.php';
   }
   elseif (file_exists(VIEWS.$className.'.php'))
   {
       include_once VIEWS.$className.'.php';
   }
   elseif (file_exists(CONTROLLER.$className.'.php'))
   {
       include_once CONTROLLER.$className.'.php';
   }
});

new Application();
//$URL = explode('/',$_SERVER['REQUEST_URI']);
//var_dump($URL);

?>