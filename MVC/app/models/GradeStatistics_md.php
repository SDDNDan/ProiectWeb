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
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Agent smith');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        curl_close($ch);
        $result = json_decode(trim($output), true);

        return $result;
    }

    function getGitHubNumber($NumeGithub)
    {
        
        $repos = $this->github_request('https://api.github.com/users/' . $NumeGithub . '/repos?client_id=22d672cab4d7c171c9cf&client_secret=86e5538e9b0c2cc193578a61d5b59e7dd1c6d543');
        $repos3 = $this->github_request('https://api.github.com/users/' . $NumeGithub . '/events');

        $counter = 0;

        $today = date("Y-m-j", strtotime("-1 months"));
        foreach ($repos as $repo):
            $url = 'https://api.github.com/repos/' . $repo['full_name'] . '/commits?since=' . $today . '?client_id=22d672cab4d7c171c9cf&client_secret=86e5538e9b0c2cc193578a61d5b59e7dd1c6d543';
            $repos2 = $this->github_request($url);
            foreach ($repos2 as $repo2):
                if (isset($repo2['author']['login']) && $repo2['author']['login'] == $NumeGithub) {
                    $counter++;
                }

            endforeach;
        endforeach;

        return (int)$repos3+(int)$counter;
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

    function getMedia($username, $prenume)
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
        return json_encode($media / $counter);
    }

    function getNumberOfPresences($username, $prenume)
    {
        $query = "SELECT count(*) FROM prezente where NUME = ? and PRENUME = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$username, $prenume]);
        while ($row = $statement->fetch()) {
            $numar = $row[0];
        }

        return $numar;
    }

    function datediffInWeeks($date1, $date2)
    {
        if ($date1 > $date2) return $this->datediffInWeeks($date2, $date1);
        $first = DateTime::createFromFormat('m/d/Y', $date1);
        $second = DateTime::createFromFormat('m/d/Y', $date2);
        return floor($first->diff($second)->days / 7);
    }

    function getSuggestion($rezultat)
    {
        $media = ($rezultat[2] * 0.7);
        $media += ($rezultat[3] * 0.10);
        $media += (($rezultat[0] * 0.4) * 0.1);
        $media += (($rezultat[1] * 0.4) * 0.1);
        $media *= 10;
        $numar = -1;
        switch (true) {
            case ($media > 80):
                $numar = 4;
                break;
            case ($media > 50):
                $numar = 3;
                break;
            case ($media > 40):
                $numar = 2;
                break;
            case ($media > 0):
                $numar = 1;
                break;
        }
        $sugestia = array();
        $query = "SELECT SUGGETION FROM suggetions where ID = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$numar]);
        while ($row = $statement->fetch()) {
            array_push($sugestia,$row[0]);
            array_push($sugestia,$media);
            return $sugestia;

        }

    }

    function getSuggestionCSS($gradePromovability)
    {
        $numar = 1;
        switch (true) {
            case ($gradePromovability > 80):
                $numar = 3;
                break;
            case ($gradePromovability > 50):
                $numar = 2;
                break;
            default:
                $numar = 1;
        }

        $query = "SELECT SUGESTIE FROM css where NIVEL = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$numar]);
        while ($row = $statement->fetch()) {
            $cssSuggestion = $row[0];
            return$cssSuggestion;
        }
    }
    function getSuggestionJS($gradePromovability)
    {
        $numar = 1;
        switch (true) {
            case ($gradePromovability > 80):
                $numar = 3;
                break;
            case ($gradePromovability > 50):
                $numar = 2;
                break;
            default:
                $numar = 1;
        }

        $query = "SELECT SUGESTIE FROM javascript where NIVEL = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$numar]);
        while ($row = $statement->fetch()) {
            $suggestion = $row[0];
            return $suggestion;
        }
    }

    function getSuggestionHtml($gradePromovability)
    {
        $numar = 1;
        switch (true) {
            case ($gradePromovability > 80):
                $numar = 3;
                break;
            case ($gradePromovability > 50):
                $numar = 2;
                break;
            default:
                $numar = 1;
        }

        $query = "SELECT SUGESTIE FROM html where NIVEL = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$numar]);
        while ($row = $statement->fetch()) {
            $suggestion = $row[0];
            return $suggestion;
        }
    }

    function getSuggestionPhp($gradePromovability)
    {
        $numar = 1;
        switch (true) {
            case ($gradePromovability > 80):
                $numar = 3;
                break;
            case ($gradePromovability > 50):
                $numar = 2;
                break;
            default:
                $numar = 1;
        }

        $query = "SELECT SUGESTIE FROM php where NIVEL = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$numar]);
        while ($row = $statement->fetch()) {
            $suggestion = $row[0];
            return $suggestion;
        }
    }
}