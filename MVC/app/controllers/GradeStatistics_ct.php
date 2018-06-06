<?php

/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 2:22 AM
 */
class GradeStatistics_ct extends core_controller
{
    protected $gradeStatisticsModel;
    public function __construct()
    {
        $this->gradeStatisticsModel = new GradeStatistics_md();
    }

    public function index()
    {

        $name = 'SDDNDan';

        $repos = $this->github_request('https://api.github.com/users/'.$name.'/repos');
        foreach ($repos as $repo):
            $url = 'https://api.github.com/repos/' . $name . '/' . $repo['name'] . '/commits';
            $repos2 = $this->gradeStatisticsModel->github_request($url);
            foreach ($repos2 as $repo2):

                    var_dump($repo2);


            endforeach;
        endforeach;

        $this->returnView('GradeStatistics', []);
        $this->view->renderView();
    }


    function github_request($url)
    {
        $ch = curl_init();
        $access = 'SDDNDan:b178f37d4b6170a2a305b889c9e0fe32c97f2d31';
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
        $output = curl_exec($ch);
        curl_close($ch);
        $result = json_decode(trim($output), true);
        return $result;
    }






}

?>