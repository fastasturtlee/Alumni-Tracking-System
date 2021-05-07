<?php

class Certificate extends CI_Controller{
    public function index($userid){
            $data['user'] = $this->user_model->getUser($userid);
            $this->load->view('certificate/certificate',$data);
        }
    }