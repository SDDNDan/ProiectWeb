<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/20/2018
 * Time: 12:15 AM
 */

class index_ct extends core_controller
{
    public function __construct()
    {

    }

    public function index()
    {
       $this->returnView('index',[]);
       $this->view->renderView();

    }
    public function logout(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        $this->returnView('login',[]);
        $this->view->renderView();
    }

}
?>