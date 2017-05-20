<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('loginModel');
    }

    /**
     * Carga la vista login
     */
    public function index()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $row = $this->loginModel->getUser($email);
        if ($row != null) {
            if ($row[0]->password == $password) {
                $data = array(
                    'email' => $email,
                    'id' => $row[0]->id,
                    'login' => true
                );
                $this->session->set_userdata($data);
                echo "El usuario " . $this->session->userdata('email') . " se ha logueado";
            } else {
                header("Location: " . base_url());
            }
        } else {
            header("Location: " . base_url());
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        header("Location: " . base_url());
    }

    /**
     * Metodo del controlador que envia los datos a el modelo
     */
    public function registUser()
    {
        $data['user'] = $this->input->post('user');
        $data['password'] = $this->input->post('password');
        $this->loginModel->registUser($data);
    }

}
