<?php

class Certificate extends CI_Controller{
    public function index($userid){
            $data['user'] = $this->user_model->getUser($userid);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/header');
            $this->load->view('admin/certificate',$data);
            $this->load->view('admin/footer'); 
        }
    }