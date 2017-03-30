<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {    

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("teamModel");
    }
    /**
     * Carga el vector con el equipo 
     */
    public function index() {        
        $this->data['teams'] = $this->teamModel->getTeams();        
        $this->load->view("teams", $this->data);
    }

    public function insertTeam() {
        $data['name'] = $this->input->post("name");
        $data['id_tournament'] = "1";
        $data['id_phase'] = "1";
        $this->teamModel->insertTeam($data);
    }
}