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

        $this->conn = new mysqli('localhost','root','','student') or die ("Naspa");

    }

    public function loginResult($email,$password)
    {

        $numar = 0;
        $result = $this->conn->prepare('select count(*) FROM studenti WHERE EMAIL = ? and PASSWORD = ?');
        $result->bind_param('ss', $email,$password);
        $result->execute();
        $result->bind_result($numar);
        while($result->fetch())
        {
            if($numar > 0)
                return 'S';
        }

        $result = $this->conn->prepare('select count(*) FROM profesori WHERE EMAIL = ? and PASSWORD = ?');
        $result->bind_param('ss', $email,$password);
        $result->execute();
        $result->bind_result($numar);
        while($result->fetch())
        {
            if($numar > 0)
                return 'P';
        }

        $result = $this->conn->prepare('select CREATED_AT FROM studenti');
        $result->execute();
        $result->bind_result($data);
        while($result->fetch())
        {
            echo $data.' ';
        }





    }

}
?>