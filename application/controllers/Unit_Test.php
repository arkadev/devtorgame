<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_Test extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->library('Team');
    }

    public function team()
    {
        $name = 'Equipo 1';
        $team = new Team('Equipo 1');
        return $this->unit->run($team->getName(), $name, 'Se creo correctamente el equipo');
    }

    public function index()
    {
        echo $this->team();
    }

}
