<?php

class Admin extends MY_Controller{

    public function dashboard()
    {

        $this->load->model('articles_model','articles');

        $articles = $this->articles->articles_list();
        $this->load->view('admin/dashboard',['articles'=>$articles]);
    }
    public function add_article()
    {
        $this->load->view('admin/add_article');
        

    }
    public function store_article()
    {
            $this->load->library('form_validation');
            if( $this->form_validation->run('add_article_rules')){
                $post = $this->input->post();
                unset($post['submit']);
                $this->load->model('articles_model','articles');
                if( $this->articles->add_article($post)){
                    $this->session->set_flashdata('feedback',"Article Added Succesfully");
                    $this->session->set_flashdata('feedback_class','alert-success');
                }else{
                    $this->session->set_flashdata('feedback',"Article Failed to Add.");
                    $this->session->set_flashdata('feedback_class','alert-danger');
                }
                return redirect('admin/dashboard');
            }else{
                return redirect('admin/add_article');
            }
    }
    public function edit_article($article_id)
    {
        $this->load->model('articles_model','articles');
        $article = $this->articles->find_article($article_id);
        $this->load->view('admin/edit_article',['article'=>$article]);

    }
    public function update_article($article_id)
    {
    
        $this->load->library('form_validation');
            if( $this->form_validation->run('add_article_rules')){
                $post = $this->input->post();
                unset($post['submit']);
                $this->load->model('articles_model','articles');
                
                if( $this->articles->update_article($article_id,$post)){
                    $this->session->set_flashdata('feedback',"Article Updated Succesfully");
                    $this->session->set_flashdata('feedback_class','alert-success');
                }else{
                    $this->session->set_flashdata('feedback',"Article Failed to Update.");
                    $this->session->set_flashdata('feedback_class','alert-danger');
                }
                return redirect('admin/dashboard');
            }else{
                return redirect('admin/edit_article');
            }

    }
    public function delete_article()
    {
        $article_id = $this->input->post('article_id');
        $this->load->model('articles_model','articles');
        if( $this->articles->delete_article($article_id)){
            $this->session->set_flashdata('feedback',"Article Deleted Succesfully");
            $this->session->set_flashdata('feedback_class','alert-success');
        }else{
            $this->session->set_flashdata('feedback',"Article Failed to Delete.");
            $this->session->set_flashdata('feedback_class','alert-danger');
        }
        return redirect('admin/dashboard');
        
    }

    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('user_id'))
            return redirect('login');
    }

}