<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/20/2018
 * Time: 12:21 AM
 */

class login_ct extends core_controller
{

    protected $loginModel;
    public function __construct()
    {
        $this->loginModel = new login_md();
    }

    public function index()
    {
        $this->returnView('login',[]);
        $this->view->renderView();

    }public function test()
    {
        $this->returnView('login',[]);
        $this->view->renderView();

    }
    public function makeLogin(){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $this->loginModel->loginResult($username,$password);
        var_dump($result);
        switch ($result)
        {

            case 'N':
                $this->returnView('login',[]);
                $this->view->renderView();
                      break;

            case 'S':
                $this->returnView('index',[]);
                $this->view->renderView();
                      break;

            case 'P':
                $this->returnView('manageStudents',[]);
                $this->view->renderView();
                      break;
        }

    }



}
?>