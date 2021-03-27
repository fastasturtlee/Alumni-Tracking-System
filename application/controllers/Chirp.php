<?php

class Chirp extends CI_Controller{
    public function post(){
        $userid  = $this->session->userdata('user_id');
        $username = $this->user_model->getUserName($userid);
        $profile_pic = $this->user_model->getUser($userid)['profile_pic'];

        $data = array(
            'description' => $this->input->post('description'),
            'username'  => $username,
            'profile_pic' =>$profile_pic
        );
        $this->chirp_model->post($data);
        redirect('chirp');
    }

}