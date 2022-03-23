<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('id'))
        return redirect('admin/welcome');
    }
    public function welcome(){
        $this->load->model('loginmodel');
        $articles=$this->loginmodel->articlelist();
        $this->load->view('admin/dashboard',['articles'=> $articles]);
    }
    public function register(){
        $this->load->view('admin/register');
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        return redirect('login');
    }
}
?>