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
        $this->load->view("team_view", $this->data);
    }

    public function insertTeam() {
        $data['name'] = $this->input->post("name");
        $this->teamModel->insertTeam($data);
    }
}