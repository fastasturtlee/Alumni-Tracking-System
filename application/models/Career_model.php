<?php

class Career_model extends CI_Model{
    public function add(){
        $data = array(
            'title' => $this->input->post('title'),
            'description'=>$this->input->post('description'),
            'location' => $this->input->post('location'),
            'duration' => $this->input->post('duration'),
            'work_type' => $this->input->post('work_type'),
            'salary' => $this->input->post('salary'),
            'link' => $this->input->post('link'),
        );
        return $this->db->insert('careers',$data);
    }

    public function getCareers(){
        $this->db->select('*');
        $this->db->from('careers');
        $this->db->order_by('career_id',"DESC");
        $query = $this->db->get();
        return $query->result();        

    }
    public function getCareer($career_id){
        $query = $this->db->get_where('careers',array('career_id'=>$career_id));
        return $query->row_array();
    }

    public function update(){
        $career_id = $this->input->post('career_id');
        $data = array(
            'title' => $this->input->post('title'),
            'description'=>$this->input->post('description'),
            'location' => $this->input->post('location'),
            'duration' => $this->input->post('duration'),
            'work_type' => $this->input->post('work_type'),
            'salary' => $this->input->post('salary'),
            'link' => $this->input->post('link'),
        );

        $this->db->where('career_id',$career_id);
        return $this->db->update('careers',$data);
    }

    public function delete($career_id){

        $this->db->where('career_id',$career_id);
        return $this->db->delete('careers');
       

   }


   public function unpublish($career_id){
    $data = array(
        'ispublish' => 0
    );
    $this->db->where('career_id',$career_id);
    return $this->db->update('careers',$data);

}

public function publish($career_id){
    $data = array(
        'ispublish' => 1
    );
    $this->db->where('career_id',$career_id);
    return $this->db->update('careers',$data);

}

public function getNumRow(){
    $this->db->select('*');
    $this->db->from('careers');
    $query = $this->db->get();
    return $query->num_rows();        

}
}