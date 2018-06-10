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






    function getGithubCommits()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $NumeGithub = $_POST['NumeGithub'];
//        $repos = $this->gradeStatisticsModel->github_request('https://api.github.com/users/'.$NumeGithub.'/repos');
//        $counter = 0;
//        $today = date("Y-m-j" , strtotime("-3 months"));
//        foreach ($repos as $repo):
//            var_dump($repo);
//            $url = 'https://api.github.com/repos/'.$repo['full_name'].'/commits?since='.$today;
//            $repos2 = $this->gradeStatisticsModel->github_request($url);
//            foreach ($repos2 as $repo2):
//                if (isset($repo2['author']['login']) && $repo2['author']['login'] == $NumeGithub) {
//                    $counter++;
//                }
//
//            endforeach;
//        endforeach;
        $media = $this->gradeStatisticsModel->getMedia("Slusariuc" , "Dan");
        var_dump($media);
        $reposstack = $this->gradeStatisticsModel->stackOverFlow("https://api.stackexchange.com/2.2/users/6582264/questions?order=desc&sort=activity&site=stackoverflow");
        $rezultat = array();
        array_push($rezultat,22);
        array_push($rezultat,$reposstack);
        echo json_encode($rezultat);

        //$this->returnView('GradeStatistics', []);
        //$this->view->renderView();
    }








}

?>