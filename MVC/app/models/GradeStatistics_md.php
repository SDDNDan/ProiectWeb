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
        $this->conn = new mysqli('localhost','root','','student') or die ("Naspa");
    }

    function github_request($url)
    {
        $ch = curl_init();
        $access = 'SDDNDan:7d910e86cc8063bebd09615e48fd31d3211da05d';
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

    function getNumberOfPresences($nume, $prenume) {
        $numar = 0;
        $result = $this->conn->prepare('select count(*) FROM prezente WHERE NUME = ? and PRENUME = ?');
        $result->bind_param('ss', $nume, $prenume);
        $result->execute();
        $result->bind_result($numar);
        return $numar;
    }
}