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
        $access = 'SDDNDan:9208b4ffeaa29527c4764c6fd6a9041647a04c26';
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
}