<?php

class test_ct extends core_controller{
    function __construct()
    {
    }
    public function index()
    {
        $this->returnView('test',[]);
        $this->view->renderView();

    }
    public function sendMail()
    {
        $this->returnView('test',[]);
        $this->view->renderView();

    }
}