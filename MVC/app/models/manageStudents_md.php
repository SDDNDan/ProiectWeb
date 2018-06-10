<?php

/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/29/2018
 * Time: 11:25 PM
 */
class manageStudents_md
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

    public function getPrezente($username, $prenume)
    {


        $query = "SELECT DATA FROM prezente where NUME = ? and PRENUME = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$username, $prenume]);
        return json_encode($statement->fetchAll());
    }

    public function getGrades($username, $prenume)
    {


        $query = "SELECT ID FROM STUDENTI where NUME = ? and PRENUME = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$username, $prenume]);
        while ($row = $statement->fetch()) {
            $idul = $row;
        }

        $idul = $idul['ID'];
        $query = "SELECT VALOARE,DATA_NOTARE FROM NOTE where ID_STUDENT = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$idul]);
        return json_encode($statement->fetchAll());
    }

    public function getInterventions($username, $prenume)
    {


        $query = "SELECT INTERVENTIE FROM INTERVENTI where NUME = ? and PRENUME = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$username, $prenume]);
        return json_encode($statement->fetchAll());

    }

    public function insertGrade($username, $prenume, $nota)
    {
        $query = "SELECT ID FROM STUDENTI where NUME = ? and PRENUME = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$username, $prenume]);
        while ($row = $statement->fetch()) {
            $idul = $row;
        }

        $query = "SELECT max(ID) FROM note";
        $statement = $this->conn->prepare($query);
        $statement->execute([$username, $prenume]);
        while ($row = $statement->fetch()) {
            $maxidul = $row;
        }

        var_dump($maxidul);
        $date = date('Y-m-d H:i:s');

        $query = "INSERT INTO NOTE VALUES (?,?,?,?)";
        $statement = $this->conn->prepare($query);
        $statement->execute([((int)$maxidul[0] + 1), (int)$idul, (int)$nota, $date]);

    }

    public function insertInterventie($nume, $prenume, $interventie)
    {
        $query = "INSERT INTO INTERVENTI VALUES (?,?,?)";
        $statement = $this->conn->prepare($query);
        $statement->execute([$nume, $prenume, $interventie]);
    }

    public function insertPresence($nume, $prenume, $dataPresence)
    {
        $query = "INSERT INTO PREZENTE VALUES (?,?,?)";
        $statement = $this->conn->prepare($query);
        $statement->execute([$nume, $prenume, $dataPresence]);
    }

}

?>