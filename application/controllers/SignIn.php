<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller
{

    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('signIn');
    }

}
