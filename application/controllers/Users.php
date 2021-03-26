<?php

class Users extends CI_Controller{
    public function register(){
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('ernno', 'Ern No', 'required|callback_check_ernno_exists|callback_check_ern_no_valid');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');
            if (empty($_FILES['img_profile'])){
             $this->form_validation->set_rules('img_profile', 'Profile Photo', 'required');
            }

			if($this->form_validation->run() === FALSE){
				$this->load->view('header');
				$this->load->view('register');
				$this->load->view('footer');
			} else {
				// Encrypt password
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2000;
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('img_profile'))
                {
                    $uploadedData = $this->upload->data();
                    $filename = $uploadedData['file_name'];
                    if($filename == file_exists('uploads/'.$filename))
                    $enc_password = md5($this->input->post('password'));
                    $this->user_model->register($enc_password,$filename);
                    redirect('login');
                       
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('header');
				    $this->load->view('register',$error);
				    $this->load->view('footer');
                }
				
			}
    }


    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
        if($this->user_model->check_email_exists($email)){
            return true;
        } else {
            return false;
        }
    }

    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
        if($this->user_model->check_username_exists($username)){
            return true;
        } else {
            return false;
        }
    }

    public function check_ernno_exists($ern_no){
        $this->form_validation->set_message('check_username_exists', 'That ern no is taken. Please choose a different one');
        if($this->user_model->check_ernno_exists($ern_no)){
            return true;
        } else {
            return false;
        }
    }

//login
public function login(){

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() === FALSE){
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    } else {
        
        // Get username
        $email = $this->input->post('email');
        // Get and encrypt the password
        $password = md5($this->input->post('password'));

        // Login user
        $user_id = $this->user_model->login($email, $password);

        $user_type = $this->user_model->getUserType($user_id);

        $is_verified = $this->user_model->getVerifyStatus($user_id);

        if($user_id){
            $user_data = array(
                'user_id' => $user_id,
                'email_id' => $email,
                'logged_in' => true,
                'user_type' => $user_type,
                'is_verified' => $is_verified
            );

            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('user_loggedin', 'You are now logged in');
            if($user_type == 'alumni'){
               redirect('/');
            }else{
            redirect('admin/index');}
        } else {
            
            $this->session->set_flashdata('login_failed', 'Login is invalid');

            redirect('users/login');
        }		
    }
}

        public function logout(){
            $this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');
            $this->session->unset_userdata('user_type');
            redirect('login');
        }

        public function edit($userid){
            $data['user'] = $this->user_model->getUser($userid);
            $this->load->view('students/view',$data);
        }

        public function update(){
            $userid = $this->input->post('userid');
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2000;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);
            $user = $this->user_model->getUser($userid);
            
            if ($this->upload->do_upload('img_profile'))
            {
                if($user['profile_pic'] && file_exists('uploads/'.$user['profile_pic'])){
                    $filepath = 'uploads/'.$user['profile_pic'];
                    unlink($filepath);
                }
                $uploadedData = $this->upload->data();
                $filename = $uploadedData['file_name'];
                $this->user_model->updateUser($userid,$filename);
                redirect('admin/index');
                   
            }
            else
            {
                $filename = $user['profile_pic'];
                $this->user_model->updateUser($userid,$filename);               
                redirect('admin/index');                
            }
            
        }

        public function verify($userid){
            $this->user_model->verify($userid);
            redirect('admin/student');
        }

        public function unverify($userid){
            $this->user_model->unverify($userid);
            redirect('admin/student');
        }

        public function delete($userid){
            $this->user_model->delete($userid);
            redirect('admin/student');
        }

        public function check_ern_no_valid($ernno){
            $this->form_validation->set_message('check_ern_no_valid', 'That ern no is not valid.please enter the valid ern no or contact admin');
           if($this->ern_no_model->valid($ernno)) {
               return TRUE;
           }else{
               return FALSE;
           }
        }
}