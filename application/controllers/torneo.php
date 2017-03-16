<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Torneo extends CI_Controller {    

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("torneoModel");
    }
    /**
     * Carga el vector con el equipo 
     */
    public function index() {        
        $this->data['teams'] = $this->torneoModel->getTeams();        
        $this->load->view("teams", $this->data);
    }

    public function insertTeam() {
        $data['name'] = $this->input->post("name");
        $this->torneoModel->insertTeam($data);
    }
}