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

    public function update(){
        $userid = $this->input->post('userid');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2000;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        $user = $this->user_model->getUser($userid);
        $currentuser = $this->input->post('currentuser');
        
        if ($this->upload->do_upload('img_profile'))
        {
            if($user['profile_pic'] && file_exists('uploads'.$user['profile_pic'])){
                $filepath = 'uploads'.$user['profile_pic'];
                unlink($filepath);
            }
            $uploadedData = $this->upload->data();
            $filename = $uploadedData['file_name'];
            $this->user_model->updateUser($userid,$filename);
            redirect('');
               
        }
        else
        {
            $filename = $user['profile_pic'];
            $this->user_model->updateUser($userid,$filename);               
            redirect('');               
        }

        if ($this->upload->do_upload('certupload'))
        {
            if($user['certupload'] && file_exists('uploads/cert/'.$user['certupload'])){
                $filepath = 'uploads/cert/'.$user['certupload'];
                unlink($filepath);
            }
            $uploadedData = $this->upload->data();
            $certename = $uploadedData['file_name'];
            $this->user_model->updateUser($userid,$certename);
            redirect('');
               
        }
        else
        {
            $certename = $user['profile_pic'];
            $this->user_model->updateUser($userid,$certename);               
            redirect($currentuser.'/student');               
        }
        
    }
    public function certificate (){
        $this->load->view('header');
        $this->load->view('alumni/certificate');
        $this->load->view('footer');
    }

    public function addcertificate(){
        $this->load->view('header');
        $this->load->view('alumni/certificate');
        $this->load->view('footer');

    }
}