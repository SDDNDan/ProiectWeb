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

        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "student";
        $this->conn = $this->connInit($dbHost, $dbUser, $dbPass, $dbName);
        //$this->conn = new mysqli('localhost','root','','student') or die ("Naspa");
    }

    public function connInit($dbHost, $dbUser, $dbPass, $dbName)
    {
        try {

            $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
            $pdo->exec("set names utf8");
            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            return $pdo;
        } catch (PDOException $e) {
            echo "Conectarea la baza de date a esuat." . $e->getMessage();
        }
    }
    public function loginResult($email,$password)
    {



        $query = "SELECT count(*) FROM STUDENTI where EMAIL = ? and PASSWORD = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$email,$password]);
        if(count($statement->fetchAll())>0)
        {
            return 'S';
        }

        $query = "SELECT count(*) FROM profesori where EMAIL = ? and PASSWORD = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$email,$password]);
        if(count($statement->fetchAll())>0)
        {
            return 'P';
        }

       return 'N';
    }

    public function getNandP($email)
    {

        $query = "SELECT NUME,PRENUME FROM STUDENTI where EMAIL = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$email]);
        while ($row = $statement->fetch()) {
            $result = array();
            array_push($result,$row[0]);
            array_push($result,$row[1]);
            return $result;
        }
    }


}
?>