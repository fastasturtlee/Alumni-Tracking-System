<?php

class Chirp extends CI_Controller{
    public function post(){
        $userid  = $this->session->userdata('user_id');
        $username = $this->user_model->getUserName($userid);
        $data = array(
            'description' => $this->input->post('description'),
            'username'  => $username
        );
        $this->chirp_model->post($data);
        redirect('chirp');
    }

}