<?php

/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 2:22 AM
 */
class GradeStatistics_ct extends core_controller
{
    public function __construct()
    {

    }

    public function index()
    {

//        $name = 'SDDNDan';
//        $repos = $this->github_request('https://api.github.com/users/SDDNDan/repos');
//
//        foreach ($repos as $repo):
//            $url = 'https://api.github.com/repos/' . $name . '/' . $repo['name'] . '/commits';
//            $repos2 = $this->github_request($url);
//            foreach ($repos2 as $repo2):
//                if ($repo2['author']['login']) {
//                    echo $repo2['author']['login']. PHP_EOL;
//
//                }
//            endforeach;
//        endforeach;

        $this->returnView('GradeStatistics', []);
        $this->view->renderView();
    }



    function stackOverFlow($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Agent smith');
        $output = curl_exec($ch);
        curl_close($ch);
        $result = json_decode(trim($output), true);
        return $result;
    }






}

?>