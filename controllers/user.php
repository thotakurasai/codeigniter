<?php

class User extends MY_Controller{

    public function index(){
        $this->load->view('public/articles_list');
        //$this->load->helper('html');
        //<?= link_tag('assets/css/bootstrap.min.css')
    }
}