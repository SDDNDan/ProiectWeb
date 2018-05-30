<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/28/2018
 * Time: 12:33 AM
 */

class manageStudents_ct extends core_controller
{
    protected $manageStudentsModel;

    public function __construct()
    {
        $this->manageStudentsModel = new manageStudents_md();
    }

    public function index()
    {
        $this->returnView('manageStudents',[]);
        $this->view->renderView();
    }

    public function getPrezente()
    {
        $nume = $_POST['NumeInput'];
        $prenume = $_POST['PrenumeInput'];
        $result = $this->manageStudentsModel->getPrezente($nume,$prenume);
        echo json_encode($result);
    }

    public function getGrades()
    {
        $nume = $_POST['NumeInput'];
        $prenume = $_POST['PrenumeInput'];
        $result = $this->manageStudentsModel->getGrades($nume,$prenume);
        echo json_encode($result);
    }

    public function getInterventions()
    {
        $nume = $_POST['NumeInput'];
        $prenume = $_POST['PrenumeInput'];
        $result = $this->manageStudentsModel->getInterventions($nume,$prenume);
        echo json_encode($result);
    }

    public function insertGrades()
    {
        $nume = $_POST['NumeInput'];
        $prenume = $_POST['PrenumeInput'];
        $nota = $_POST['nota'];
        $this->manageStudentsModel->insertGrade($nume,$prenume,$nota);
    }

    public function insertIntervention()
    {
        $nume = $_POST['NumeInput'];
        $prenume = $_POST['PrenumeInput'];
        $interventie = $_POST['Interventie'];
        $this->manageStudentsModel->insertInterventie($nume,$prenume,$interventie);
    }

    public function insertPresence()
    {
        $nume = $_POST['NumeInput'];
        $prenume = $_POST['PrenumeInput'];
        $ziua = $_POST['ziua'];
        $luna = $_POST['luna'];
        $anul = $_POST['anul'];
        $date = (string)$ziua."-".(string)$luna."-".(string)$anul;
        var_dump($date);
        $this->manageStudentsModel->insertPresence($nume,$prenume,$date);
    }

}