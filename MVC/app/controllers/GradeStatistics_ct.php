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

    function getGithubCommits()
    {
        $NumeGithub = $_POST['NumeGithub'];
        $repos = $this->gradeStatisticsModel->github_request('https://api.github.com/users/'.$NumeGithub.'/repos');
        $counter = 0;
        $today = date("Y-m-j" , strtotime("-3 months"));
        foreach ($repos as $repo):
            $url = 'https://api.github.com/repos/' . $NumeGithub . '/' . $repo['name'] . '/commits?since='.$today;
            $repos2 = $this->gradeStatisticsModel->github_request($url);
            foreach ($repos2 as $repo2):
                if (isset($repo2['author']['login']) && $repo2['author']['login'] == $NumeGithub) {
                    $counter++;
                }
            endforeach;
        endforeach;
        echo json_encode($counter);
    }






}

?>