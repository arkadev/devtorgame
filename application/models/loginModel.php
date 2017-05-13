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

}
