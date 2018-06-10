<?php
/**
 * Created by PhpStorm.
 * User: stfcr
 * Date: 6/10/2018
 * Time: 8:17 PM
 */

class forgot_ct extends core_controller
{

    protected $forgotModel;

    public function __construct()
    {
        $this->forgotModel = new forgot_md();
    }

    public function index()
    {
        $this->returnView('forgot',[]);
        $this->view->renderView();

    }

    public function getPassword()
    {
        $email = $_POST['email'];
        $password = $this->forgotModel->getPassword($email);
        $this->forgotModel->sendMail($email,$password);
        $this->returnView('login',[]);
        $this->view->renderView();
    }
}