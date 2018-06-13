<?php

    include_once '../models/GradeStatistics_md.php';

    $gradeStatistics_md = new GradeStatistics_md();

    $nume = $_POST['Nume'];
    $prenume = $_POST['Prenume'];

    $jsonRespone = $gradeStatistics_md->getInterventions($nume, $prenume);

    $interventions_array = json_decode($jsonRespone,true);
    echo json_encode($interventions_array);

?>