<?php

class Login extends MY_Controller{
    public function index()
    {
        if( $this->session->userdata('user_id'))
            return redirect('admin/dashboard');

        $this->load->view('public/admin_login');
    }

    public function admin_login() 
    {
        $this->form_validation->set_rules('username','User Name','required|alpha|trim');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() )
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('LoginModel');

            $login_id = $this->LoginModel->login_valid($username,$password);
            if($login_id){

                $this->session->set_userdata('user_id', $login_id);

                return redirect('admin/dashboard');

            }else{
                $this->session->set_flashdata('login_failed','Invalid Username/Password.');
                return redirect('login');
            }

        }else {
            $this->load->view('public/admin_login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('user_id');
        return redirect('login');
    }
}