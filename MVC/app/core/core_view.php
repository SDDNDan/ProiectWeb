<?php
/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/20/2018
 * Time: 12:53 AM
 */
class core_view{
    protected $view_filename;
    protected $view_data;

    public function __construct($view_filename,$view_data)
    {
        $this->view_data = $view_data;
        $this->view_filename = $view_filename;
    }
    public function renderView()
    {
        if(file_exists(VIEWS.$this->view_filename.'.php'))
        {
            include_once VIEWS.$this->view_filename.'.php';
        }
    }
}
?>