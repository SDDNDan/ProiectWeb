<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 12:33 AM
 */

class manageStudents_ct extends core_controller
{
    protected $conn;
    public function __construct()
    {
        $this->conn = oci_connect('STUDENT', 'STUDENT', 'localhost/XE');
    }

    public function index()
    {
        $this->returnView('manageStudents',[]);
        $this->view->renderView();
    }
}