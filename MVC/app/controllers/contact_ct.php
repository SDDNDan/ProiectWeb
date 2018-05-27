<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 2:22 AM
 */
class contact_ct extends core_controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->returnView('contact',[]);
        $this->view->renderView();

    }

}
?>