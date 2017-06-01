<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("tournamentModel");
    }

    public function index()
    {
        $name_tournament = ($_GET['get_name']);
        $this->data['tourn'] = $this->tournamentModel->getTournaments($name_tournament);
        if ($this->tournamentModel->getCountPhases($name_tournament)[0]->count==0) {
          $this->insertPhase($name_tournament);
        }
        $this->load->view('tournament', $this->data);
    }



    public function insertPhase($name)
    {
        $this->tournamentModel->insertPhase($name);
    }

    public function insertTeamToPhase($phase, $team)
    {
        $this->tournamentModel->insertTeamToPhase($phase, $team);
    }

}
