<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('SignIn');
}    
    public function index()
    {
    $this->load->view('index');
    }

    public function loginAction()
    {
        $post = $this->input->post();
        
        
    }
}