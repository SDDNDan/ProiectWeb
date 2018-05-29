<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 2:22 AM
 */
class contact_ct extends core_controller
{
    protected $contactModel;
    public function __construct()
    {
        $this->contactModel = new contact_md();
    }

    public function index()
    {

        $this->returnView('contact',[]);
        $this->view->renderView();

    }

    public function sendMail()
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $this->contactModel->sendMail($email,$name,$subject,$message);
        return 200;

    }

}
?>