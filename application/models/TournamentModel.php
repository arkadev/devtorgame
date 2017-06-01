<?php

class TournamentModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    /**
     * Retorna un vector con los torneos
     * @param type $data
     */
    public function getTournaments($name) {
        $data = $this->db->query("
        select te.*, id_phase
        from team te, tournament tr, team_to_phase tp
        where te.id_tournament = tr.id_tournament
        and tp.id_team = te.id_team
        and te.id_tournament = (select id_tournament
        from tournament where name  = '$name')");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }

    public function insertPhase($name){
        $r = $this->db->query("select id_tournament from tournament where name = '$name'");
        $r = $r->result();
        $data['id_tournament'] = $r[0]->id_tournament;
        $this->db->insert('phase', $data);
    }

    public function getCountPhases($name){
      $r = $this->db->query("select id_tournament from tournament where name = '$name'");
      $r = $r->result();
      $id_tournament = $r[0]->id_tournament;
      $data = $this->db->query("select count(id_phase) as count from phase where id_tournament = '$id_tournament'");
      if ($data->num_rows() > 0) {
          $data = $data->result();
          return $data;
      } else {
          return false;
      }
    }
    public function getPhase($name){
        $data = $this->db->query("select id_phase from phase where id_tournament = '$name'");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }
    public function insertTeamToPhase($phase, $team){
      $data['id_team'] = $team;
      $data['id_phase'] = $phase;
      $this->db->insert('team_to_phase',$data);
    }

    public function insertGame(){

    }
}
