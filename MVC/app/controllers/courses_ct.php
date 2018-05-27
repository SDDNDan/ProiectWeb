<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/20/2018
 * Time: 12:15 AM
 */

class courses_ct extends core_controller
{
    public function __construct()
    {

    }

    public function index()
    {
       $this->returnView('courses',[]);
       $this->view->renderView();

    }

}
?>