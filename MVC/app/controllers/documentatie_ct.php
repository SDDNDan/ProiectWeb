<?php
/**
 * Created by PhpStorm.
 * User: stfcr
 * Date: 6/11/2018
 * Time: 8:27 PM
 */
class documentatie_ct extends core_controller
{


    public function __construct()
    {
    }

    public function index()
    {
        $this->returnView('documentatie', []);
        $this->view->renderView();

    }
}
