<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("tournamentModel");
    }
    /**
     * Carga el vector con el equipo 
     */
    public function index() {                
        $this->data['tourn'] = $this->tournamentModel->createTourn();
        $this->load->view("tournament", $this->data);
    }
}