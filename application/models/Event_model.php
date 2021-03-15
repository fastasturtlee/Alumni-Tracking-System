<?php

class Event_model extends CI_Model{
    public function add(){
        $data = array(
            'title' => $this->input->post('title'),
            'description'=>$this->input->post('description'),
            'venue' => $this->input->post('venue'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'day' => $this->input->post('day'),
            'month' => $this->input->post('month'),
            'year' => $this->input->post('year'),
            'organizer_name' => $this->input->post('organizer_name'),
            'organizer_contact' => $this->input->post('organizer_contact'),
        );
        return $this->db->insert('events',$data);
    }

    public function getEvents(){
        $this->db->select('*');
        $this->db->from('events');
        $query = $this->db->get();
        return $query->result();        

    }

    public function getEvent($event_id){
        $query = $this->db->get_where('events',array('event_id'=>$event_id));
        return $query->row_array();
    }

    public function unpublish($event_id){
        $data = array(
            'ispublish' => 0
        );
        $this->db->where('event_id',$event_id);
        return $this->db->update('events',$data);

    }

    public function publish($event_id){
        $data = array(
            'ispublish' => 1
        );
        $this->db->where('event_id',$event_id);
        return $this->db->update('events',$data);

    }

    public function delete($event_id){

         $this->db->where('event_id',$event_id);
         return $this->db->delete('events');
        

    }

    public function update(){
        $event_id = $this->input->post('event_id');
        $data = array(
            'title' => $this->input->post('title'),
            'description'=>$this->input->post('description'),
            'venue' => $this->input->post('venue'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'day' => $this->input->post('day'),
            'month' => $this->input->post('month'),
            'year' => $this->input->post('year'),
            'organizer_name' => $this->input->post('organizer_name'),
            'organizer_contact' => $this->input->post('organizer_contact'),
        );

        $this->db->where('event_id',$event_id);
        return $this->db->update('events',$data);
    }

    public function getNumRow(){
        $this->db->select('*');
        $this->db->from('events');
        $query = $this->db->get();
        return $query->num_rows();        
    
    }
}