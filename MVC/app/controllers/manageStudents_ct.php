<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 12:33 AM
 */

class manageStudents_ct extends core_controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->returnView('manageStudents',[]);
        $this->view->renderView();
    }

    public function getStudent()
    {
        $nume = $_POST['NumeInput'];
        $prenume = $_POST['PrenumeInput'];
        var_dump($nume);
    }
}