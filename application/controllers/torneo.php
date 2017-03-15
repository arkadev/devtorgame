<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class torneo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("torneoModel");
    }
    /**
     * Carga el vector con el equipo 
     */
    public function index() {        
        $data['teams'] = $this->torneoModel->getTeams();
        $data['tourn'] = $this->torneoModel->createTourn(data['teams']);
        $this->load->view("torneoView", $this->data);
    }

    public function insertTeam() {
        $data['name'] = $this->input->post("name");
        $this->torneoModel->insertTeam($data);
    }
}