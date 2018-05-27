<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 2:20 AM
 */

class about_ct extends core_controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->returnView('about',[]);
        $this->view->renderView();

    }

}
?>