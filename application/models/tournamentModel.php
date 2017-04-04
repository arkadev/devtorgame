<?php

class TournamentModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }   
	
	public function insertTournament($data) {
        $this->db->insert('tournament', $data);        
		$this->db->insert('phase', $data->id_tournament);
    }
    /**
     * Retorna un vector con los torneos
     * @param type $data     
     */
    public function getTournaments() {        
        $data = $this->db->query("select * from tournament");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }
}