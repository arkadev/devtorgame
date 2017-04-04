<?php

class TeamModel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }		
	
    /**
     * inserta un equipo a la base de datos
     * @param type $data
     */
    public function insertTeam($data) {
        $this->db->insert('team', $data);
    }
    /**
     * Retorna un vector todos los equipos de la base de datos
     * @return type $data or false
     */
    public function getTeams() {
        $data = $this->db->query("select * from team");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }    
}
