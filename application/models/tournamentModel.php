<?php

class TournamentModel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }   
    /**
     * Retorna un vector con los equipos ordenados aleatoreamente
     * @param type $data     
     */
    public function createTourn() {
        $data = $this->db->query("select * from team order by rand()");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }

}
