<?php

class Search_model extends CI_Model{
    public function  getResult($data){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->like('username',$data);
        $this->db->or_like('full_name',$data);
        $this->db->or_like('ern_no',$data);
        $this->db->or_like('degree',$data);
        $this->db->or_like('branch',$data);
        $this->db->or_like('passout_year',$data);
        $query = $this->db->get();
        return $query->result();


    }
}