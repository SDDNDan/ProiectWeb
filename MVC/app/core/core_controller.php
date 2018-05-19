<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/20/2018
 * Time: 12:15 AM
 */

class core_controller
{
    protected $view;
#If view data is not set then the view data will become empty array
#Take the the name of the file and data and we make a new object of type view and return it.
    function returnView($view_filename,$view_data = [])
    {
        $this->view = new core_view($view_filename,$view_data);
        return $this->view;
    }
}
?>