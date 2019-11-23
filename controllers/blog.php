<?php

class Blog extends CI_Controller{

    public function index()
    {
        $this->load->model('abc', 'a');
        $this->a->test();
        echo "<br />";
        
        $data = $this->a->authenticate();
        print_r($data);
        
        $this->load->view('blogview');
    }
    public function add()
    {
        echo "hello";
    }
}