<?php

class Admin extends CI_Controller{
    public function index(){
        
        $this->load->view('admin/sidebar');
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');

    }

    public function student(){

        $data['users'] = $this->user_model->getUsers();
    
        $this->load->view('admin/sidebar');
        $this->load->view('admin/header');
        $this->load->view('admin/student',$data);
        $this->load->view('admin/footer');

    }

    public function events(){
        $data['events'] = $this->event_model->getEvents();
        $this->load->view('admin/sidebar');
        $this->load->view('admin/header');
        $this->load->view('admin/events',$data);
        $this->load->view('admin/footer');
    }

    public function news(){
        $data['news'] = $this->news_model->getNews();

        $this->load->view('admin/sidebar');
        $this->load->view('admin/header');
        $this->load->view('admin/news',$data);
        $this->load->view('admin/footer');
    }

    public function search(){

        $this->load->view('admin/sidebar');
        $this->load->view('admin/header');
        $this->load->view('admin/search');
        $this->load->view('admin/footer');
    }

    public function careers(){
        $data['careers'] = $this->career_model->getCareers();
        $this->load->view('admin/sidebar');
        $this->load->view('admin/header');
        $this->load->view('admin/careers',$data);
        $this->load->view('admin/footer'); 
    }
}