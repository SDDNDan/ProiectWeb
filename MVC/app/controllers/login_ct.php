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

    }
    public function test(){
        $this->returnView('test',[]);
        $this->view->renderView();
    }
    public function testPOST(){
        $email = $_POST['email'];
        /*
         * ceva magie inregistrare in baza de date etc pe aici si dupaia
         *
         *  */
        session_start();
        $_SESSION['msg']="succes";
        header("location: test");
    }
    public function makeLogin(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $this->loginModel->loginResult($username,$password);
        switch ($result)
        {

            case 'N':
                $this->returnView('login',[]);
                $this->view->renderView();
                      break;

            case 'S':
                $_SESSION['auth']="student";
                $this->returnView('index',[]);
                $this->view->renderView();
                      break;

            case 'P':
                $_SESSION['auth']="profesor";
                $this->returnView('manageStudents',[]);
                $this->view->renderView();
                      break;
        }

    }



}
?>