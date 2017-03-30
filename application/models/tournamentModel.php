<?php

class TournamentModel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }   
	
	public function insertTournament($data) {
        $this->db->insert('tournament', $data);
		$aux['id_tournament'] = "1";
		$aux['name'] = "A";
		$this->db->insert('phase', $aux);
    }
    /**
     * Retorna un vector con los equipos ordenados aleatoreamente
     * @param type $data     
     */
    public function createTourn() {        
        $data = $this->db->query("select id_team, name from team order by rand()");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }

    public function insertPhase($data){
        $this->db->insert('phase', $data);
    }

}
