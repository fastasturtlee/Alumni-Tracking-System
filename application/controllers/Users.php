<?php

class Users extends CI_Controller{
    public function register(){
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('ernno', 'Ern No', 'required|callback_check_ernno_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('header');
				$this->load->view('register');
				$this->load->view('footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);
				redirect('posts');
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

        if($user_id){
            $user_data = array(
                'user_id' => $user_id,
                'email_id' => $email,
                'logged_in' => true,
                'user_type' => $user_type
            );

            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('user_loggedin', 'You are now logged in');
            
            redirect('admin/index');
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
            $this->user_model->updateUser();
            redirect('admin/index');
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
}