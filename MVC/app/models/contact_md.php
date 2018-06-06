<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/29/2018
 * Time: 6:55 PM
 */
class contact_md
{
    protected $conn;
    public function __construct()
    {
        $this->conn = new mysqli('localhost','root','','student') or die ("Naspa");
    }

    public function sendMail($email,$name,$subject,$message)
    {

//        $stid = oci_parse($this->conn, 'begin SENDMAIL(:name , :email , :subject , :message); end;');
//        oci_bind_by_name($stid, ':name', $name);
//        oci_bind_by_name($stid, ':email', $email);
//        oci_bind_by_name($stid, ':subject', $subject);
//        oci_bind_by_name($stid, ':message', $message);
//        oci_execute($stid);
//        oci_free_statement($stid);
//        oci_close($this->conn);

    }

}
