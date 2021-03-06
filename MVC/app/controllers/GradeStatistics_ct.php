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



    function getResults()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        //6582264

        $NumeGithub = $_POST['NumeGithub'];
        $IdStack = $_POST['IdStack'];
        $astazi = date("j/m/Y");
        $saptamana = (int)($this->gradeStatisticsModel->datediffInWeeks('19/2/2017', $astazi) + 1);
        $gitCommits = (int)$this->gradeStatisticsModel->getGitHubNumber($NumeGithub);
        $media = $this->gradeStatisticsModel->getMedia($_SESSION['username'] , $_SESSION['prenume']);
        $prezente = $this->gradeStatisticsModel->getNumberOfPresences($_SESSION['username'] , $_SESSION['prenume']);
        $numarInterventii = count(json_decode($this->gradeStatisticsModel->getInterventions($_SESSION['username'] , $_SESSION['prenume'])));
        $reposstack = $this->gradeStatisticsModel->stackOverFlow("https://api.stackexchange.com/2.2/users/".$IdStack."/questions?order=desc&sort=activity&site=stackoverflow");

        $rezultat = array();
        array_push($rezultat,$gitCommits);
        array_push($rezultat,$reposstack);
        array_push($rezultat,(int)$media);
        array_push($rezultat,(int)$prezente);
        array_push($rezultat,(int)$numarInterventii);

        $mediaFinala = $this->gradeStatisticsModel->getMediaFinala($rezultat);
        $suggestion = $this->gradeStatisticsModel->getSuggestion($rezultat);

        $suggestionCSS = $this->gradeStatisticsModel->getSuggestionCSS($mediaFinala);
        $suggestionHTML = $this->gradeStatisticsModel->getSuggestionHtml($mediaFinala);
        $suggestionJavascript = $this->gradeStatisticsModel->getSuggestionJS($mediaFinala);
        $suggestionPHP = $this->gradeStatisticsModel->getSuggestionPhp($mediaFinala);

        $promovability = new PromovabilityData($gitCommits, $reposstack, $media, $prezente, $numarInterventii, $suggestion
        , $suggestionHTML, $suggestionCSS, $suggestionJavascript, $suggestionPHP);

        echo json_encode($promovability);

        //$this->returnView('GradeStatistics', []);
        //$this->view->renderView();
    }








}

?>