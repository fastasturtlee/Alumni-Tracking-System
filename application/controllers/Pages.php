<?php 

class Pages extends CI_Controller{

    public function index(){
        $data['careers'] = $this->career_model->getCareers();
        $data['events'] = $this->event_model->getEvents();
        $data['news'] =$this->news_model->getNews();
        $this->load->view('header');
        $this->load->view('index',$data);
        $this->load->view('footer');
    }

    public function events(){

        $data['events'] = $this->event_model->getEvents();
        $this->load->view('header');
        $this->load->view('events',$data);
        $this->load->view('footer');
    }

        public function news(){

           $data['news'] =$this->news_model->getNews();
            $this->load->view('header');
            $this->load->view('news',$data);
            $this->load->view('footer');
        }

        public function careers(){
            $data['careers'] = $this->career_model->getCareers();
            $this->load->view('header');
            $this->load->view('careers',$data);
            $this->load->view('footer');
        }
    public function register(){

        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    public function login(){
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function certificate($userid){
        $data['userid'] = $userid;
        $data['user'] = $this->user_model->getUser($userid);
        $this->load->view('header');
        $this->load->view('certificate',$data);
        $this->load->view('footer');
    }
}