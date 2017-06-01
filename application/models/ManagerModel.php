<?php

class ManagerModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertTournament($data, $name) {
        $this->db->insert('tournament', $data);        
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
