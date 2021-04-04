<?php 


class Alumni extends CI_Controller{
    public function waiting(){
        $this->load->view('alumni/waiting');
        
    }

    public function profile($userid){
        $data['user'] = $this->user_model->getUser($userid);
        $this->load->view('header');
        $this->load->view('alumni/profile',$data);
        $this->load->view('footer');
    }

    public function chirp(){
        $data['chirps'] = $this->chirp_model->getChirps();
        $this->load->view('header');
        $this->load->view('alumni/chirp',$data);
        $this->load->view('footer');
    }
}