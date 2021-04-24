<?php

class SuperAdmin extends CI_Controller{
    public function index(){
        
        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/index');
        $this->load->view('superadmin/footer');

    }

    public function student(){

        $data['users'] = $this->user_model->getUsers();
    
        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/student',$data);
        $this->load->view('superadmin/footer');

    }

    public function events(){
        $data['events'] = $this->event_model->getEvents();
        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/events',$data);
        $this->load->view('superadmin/footer');
    }

    public function news(){
        $data['news'] = $this->news_model->getNews();

        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/news',$data);
        $this->load->view('superadmin/footer');
    }

    public function search(){

        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/search');
        $this->load->view('superadmin/footer');
    }

    public function careers(){
        $data['careers'] = $this->career_model->getCareers();
        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/careers',$data);
        $this->load->view('superadmin/footer'); 
    }

    public function certificate($userid){
        $data['user'] = $this->user_model->getUser($userid);
        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/certificate',$data);
        $this->load->view('superadmin/footer'); 
    }
}