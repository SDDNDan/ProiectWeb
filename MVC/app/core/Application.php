<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/19/2018
 * Time: 11:45 PM
 */

class Application
{
    protected $default_controller = 'index_ct';
    protected $default_action = 'index';
    protected $controller = '';
    protected $action = '';
    protected $params = '';

    function __construct()
    {
        $this->prepareURL();
        #if exists inside then the controller will become an object
        if(file_exists(CONTROLLER.$this->controller.'.php')) {
            $this->controller = new $this->controller;
            #if the action is in the controller
            if(method_exists($this->controller,$this->action))
            {
                #Call the method from the controller with the params
                call_user_func_array([$this->controller,$this->action],$this->params);

            }
        }
        else
        { #DEFAULT
            $this->controller = $this->default_controller;
            call_user_func_array([$this->controller,$this->default_action],$this->params);
        }

    }

    function prepareURL()
    {
        $request = trim($_SERVER['REQUEST_URI'],'/');
        if(!empty($request))
        {

            #Remove separator / from the request URL
            $URL = explode('/',$request);
            #If second parameter of URL is set then it will be controller else the controller will be default 'index_ct'
            $this->controller = isset($URL[1]) ? $URL[1].'_ct' : 'index_ct';
            #If action exists then the action will take a good value else default value
            $this->action = isset($URL[2]) ? $URL[2] : 'index';
            #Remove the rest
            //var_dump($URL);
            unset($URL[0],$URL[1]);
            #Set the remaining values as param
            $this->params = (!empty($URL)) ? array_values($URL) : [];
        }

//        var_dump($this->default_controller);
//        var_dump($this->default_action);
//        var_dump($this->controller);
//        var_dump($this->action);

    }


}
?>