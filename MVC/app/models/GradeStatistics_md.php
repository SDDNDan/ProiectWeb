<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 6/1/2018
 * Time: 10:10 PM
 */

class GradeStatistics_md
{
    protected $conn;
    public function __construct()
    {
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "student";
        $this->conn = $this->connInit($dbHost, $dbUser, $dbPass, $dbName);
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

    function github_request($url)
    {
        $ch = curl_init();
        $access = 'SDDNDan:6adbf210e314382fd6478776e688628e561ca577';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Agent smith');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $access);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        curl_close($ch);
        $result = json_decode(trim($output), true);

        return $result;
    }

    function stackOverFlow($url)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Agent smith');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        $output = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($output);
        foreach ($result as $a):
            return count($a);
            break;
        endforeach;
        return 0;
    }

    function getMedia($username,$prenume)
    {

        $media = 0;
        $counter = 0;
        $query = "SELECT ID FROM STUDENTI where NUME = ? and PRENUME = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$username, $prenume]);
        while ($row = $statement->fetch()) {
            $idul = $row;
        }

        $idul = $idul['ID'];
        $query = "SELECT VALOARE FROM NOTE where ID_STUDENT = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$idul]);
        while ($row = $statement->fetch()) {

           $media += $row[0];
           $counter++;
        }

        return json_encode($media/$counter);
    }
}