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
        $this->returnView('GradeStatistics',[]);
        $this->view->renderView();

    }

}
?>