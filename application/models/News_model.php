<?php

class News_model extends CI_Model{
    public function add(){

        $data = array(
            'title' => $this->input->post('title'),
            'body' =>$this->input->post('body')
        );

        $this->db->insert('news',$data);

    }

    public function getNews(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('news_id','DESC');
        $query = $this->db->get();
        return $query->result();        

    }

    public function unpublish($news_id){
        $data = array(
            'ispublish' => 0
        );
        $this->db->where('news_id',$news_id);
        return $this->db->update('news',$data);

    }

    public function publish($news_id){
        $data = array(
            'ispublish' => 1
        );
        $this->db->where('news_id',$news_id);
        return $this->db->update('news',$data);

    }

    public function delete($news_id){

         $this->db->where('news_id',$news_id);
         return $this->db->delete('news');
        

    }

    public function getNew($news_id){

       $query =  $this->db->get_where('news',array('news_id'=>$news_id));

       return $query->row_array();

    }

    public function update(){
        $newsid = $this->input->post('news_id');
        $data = array(
            'title' => $this->input->post('title'),
            'body' =>$this->input->post('body')
        );

        $this->db->where('news_id',$newsid);
        return $this->db->update('news',$data);

    }

    public function getNumRow(){
        $this->db->select('*');
        $this->db->from('news');
        $query = $this->db->get();
        return $query->num_rows();        
    
    }
}