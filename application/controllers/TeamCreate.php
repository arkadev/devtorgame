<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TeamCreate extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("tournamentModel");   
    }
	
	public function index()	{
		$this->load->view('creartorneo');
	}
	public function insertTournament() {
        $data['name'] = $this->input->post("name");
        $data['image_url'] ="lol11.png";        
        $this->tournamentModel->insertTournament($data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */