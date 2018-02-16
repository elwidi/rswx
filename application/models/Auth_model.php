
<?php

class Auth_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function authLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->select('*');
        $this->db->from('konco');
        $this->db->where('User', $username);
        $this->db->where('Pass', $password);
        $query = $this->db->get();
        return $query->row();
    }
}