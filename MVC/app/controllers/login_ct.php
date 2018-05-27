<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/20/2018
 * Time: 12:21 AM
 */

class login_ct extends core_controller
{
    protected $conn;
    public function __construct()
    {
        $this->conn = oci_connect('STUDENT', 'STUDENT', 'localhost/XE');
    }

    public function index()
    {
        $this->returnView('login',[]);
        $this->view->renderView();
    }
    public function makeLogin(){

        $username = $_POST['username'];
        $password = $_POST['password'];
        var_dump($username);
        $this->returnView('login',[]);
        $this->view->renderView();
    }

    public function student()
    {
        $name = $_POST['username'];
        $password = $_POST['password'];
        //var_dump($name.' '.$password);
        $r = $this->do_sel_bulk($this->conn);
    }

    function do_sel_bulk($c)
    {


        $stid = oci_parse($c, 'begin searchTabela(:p1); end;');
        oci_bind_by_name($stid, ':p1', $p1);
        oci_execute($stid);

        echo $p1;   // prints 16


        if($p1 === NULL) {
            $mag = "Wrong user or pass";
        }

        //clude_once("../vew/logn.php");

        oci_free_statement($stid);
        oci_close($c);

    }
}
?>