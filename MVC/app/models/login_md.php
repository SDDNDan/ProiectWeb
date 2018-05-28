<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 2:53 AM
 */
class login_md
{
    protected $conn;
    public function __construct()
    {
        $this->conn = oci_connect('STUDENT', 'STUDENT', 'localhost/XE');
    }

    public function loginResult($username,$password)
    {
        $stid = oci_parse($this->conn, 'begin searchTabela(:email , :password , :result); end;');
        oci_bind_by_name($stid, ':email', $username);
        oci_bind_by_name($stid, ':password', $password);
        oci_bind_by_name($stid, ':result', $result);
        oci_execute($stid);
        oci_free_statement($stid);
        oci_close($this->conn);
        return $result;

    }

}
?>