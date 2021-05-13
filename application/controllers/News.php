<?php

class News extends CI_Controller{
    public function create(){
        $this->load->view('news/create_news');

    }

    public function add(){
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');

        if($this->form_validation->run()===FALSE){
            $this->load->view('news/create_news');
        }else{
            $this->news_model->add();
            redirect(base_url($this->session->userdata('user_type')).'/news');
        }

    }

    public function edit($news_id){
        $data['new'] = $this->news_model->getNew($news_id);

        $this->load->view('news/view',$data);
    }

    public function unpublish($news_id){

        $this->news_model->unpublish($news_id);
        redirect(base_url($this->session->userdata('user_type')).'/news');
    }

    public function publish($news_id){

        $this->news_model->publish($news_id);
        redirect(base_url($this->session->userdata('user_type')).'/news');
    }

    public function update(){
        $this->news_model->update();
        $currentuser = $this->input->post('currentuser');
        redirect(base_url($this->session->userdata('user_type')).'/news');
        
    }
    public function delete($news_id){
        $this->news_model->delete($news_id);
        redirect(base_url($this->session->userdata('user_type')).'/news');
    }
}