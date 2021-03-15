<?php

class Ern_no_model extends CI_Model{
    public function insert_csv($data)
 {
  $this->db->insert('ern_no',$data);
 }


 public function getErn(){
    $this->db->select('*');
    $this->db->from('ern_no');
    $query = $this->db->get();
    return $query->result();      
 }

 public function delete($id){
     
    $this->db->where('id',$id);
    return $this->db->delete('ern_no');
 }

 public function repeat($data){
   $this->db->select('*');
   $this->db->from('ern_no');
   $this->db->like('ern_no',$data['ern_no']);
   $query = $this->db->get();
   if($query->num_rows() >0){
      return TRUE;
   }else{
      return FALSE;
   }
 }
}
