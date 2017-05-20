<?php

class LoginModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUser($email)
    {
        $result = $this->db->query("select * from user where email = '$email' LIMIT 1");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function registerUser($data)
    {
        $this->db->insert('user', $data);
    }

    public function ingresar($usser, $passw)
    {
        $this->db->select('email');
        $this->db->from('user');
        $this->db->where('email', $usser);
        $this->db->where('password', $passw);

        $result = $this->db->get();

        if ($result->num_rows() == 1) {
            $r = $result->row();

            $session_user = array(
                's_email' => $r->id,
                'login' => true
            );

            $this->session->set_userdata($session_user);
            return 1;
        } else {
            return 0;
        }
    }
}
