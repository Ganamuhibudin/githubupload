<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends MY_Model {
    
    function cek_user($user,$pw){
        $this->db->where('username', $user);
        $this->db->where('pass', $pw);
        $query = $this->db->get('pengguna');
        return $query->num_rows();
    }
    
}

/* End of file login_model.php */
/* Location: ./application/model/login_model.php */