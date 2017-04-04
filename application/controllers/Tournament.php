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
        $this->data['tournaments'] = $this->tournamentModel->getTournaments();
        $this->load->view("tournament", $this->data);
    }
    /**
    * Metodo del controlador que envia los datos a el modelo
    */
    public function insertTournament(){
        $data['name'] = $this->input->post("name");
        $data['description'] = $this->input->post("description");
        $data['image_url'] = $this->input->post("image_url");
        $data['color'] = $this->input->post("color");
        $this->teamModel->insertTournament($data);
    }
}