<?php
class User_model extends CI_Model{
    public function register($enc_password,$filename){
        $data = array(
            'full_name' => $this->input->post('fullname'),
            'emailid' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'ern_no' => $this->input->post('ernno'),
            'degree' => $this->input->post('degree'),
            'branch' => $this->input->post('branch'),
            'passout_year' => $this->input->post('passyear'),
            'mobileno' =>$this->input->post('mobileno'),
            'profile_pic' =>$filename
        );
        return $this->db->insert('users', $data);
    }
        public function check_email_exists($email){
            $query = $this->db->get_where('users', array('emailid' => $email));
            if(empty($query->row_array())){
                return true;
            } else {
                return false;
            }
        }

        public function check_username_exists($username){
                $query = $this->db->get_where('users', array('username' => $username));
                if(empty($query->row_array())){
                    return true;
                } else {
                    return false;
                }
            }
            public function check_ernno_exists($ern_no){
                $query = $this->db->get_where('users', array('ern_no' => $ern_no));
                if(empty($query->row_array())){
                    return true;
                } else {
                    return false;
                }
            }


            //login
            public function login($emailid, $password){
                // Validate
                $this->db->where('emailid', $emailid);
                $this->db->where('password', $password);
            
                $result = $this->db->get('users');
            
                if($result->num_rows() == 1){
                    return $result->row(0)->userid;
                } else {
                    return false;
                }
            }
    public function getUsers(){
        $this->db->select('*');
		$this->db->from('users');
        $this->db->order_by('userid','DESC');
		$query = $this->db->get();
        return $query->result();
    }

    public function getUserName($user_id){
        $query = $this->db->get_where('users',array('userid' => $user_id));
        return $query->row(0)->username;
    }

    public function getUserType($user_id){
        $query = $this->db->get_where('users', array('userid' => $user_id));
        return $query->row(0)->user_type;

    }

    public function getUser($userid){
        $query = $this->db->get_where('users',array('userid'=>$userid));
        return $query->row_array();
    }


    public function getProfilePic($userid){
        $query = $this->db->get_where('users',array('userid'=>$userid));
        return $query->row(0)->profile_pic;
    }
    public function updateUser($userid,$filename){
        $data = array(
            'full_name'=>$this->input->post('fullname'),
            'mobileno'=> $this->input->post('mobileno'),
            'ern_no'=> $this->input->post('ern_no'),
            'degree'=>$this->input->post('degree'),
            'branch'=>$this->input->post('branch'),
            'passout_year'=>$this->input->post('passout_year'),
            'proffession'=>$this->input->post('proffession'),
            'company_name'=>$this->input->post('company_name'),
            'income'=>$this->input->post('income'),
            'profile_pic' => $filename
        );
        

                
        $this->db->where('userid',$userid);
        return $this->db->update('users',$data);

    }


    public function verify($userid){
        $data = array(
            'verify' => 1
        );
     $this->db->where('userid',$userid);
     return $this->db->update('users',$data);

    }

    public function unverify($userid){
        $data = array(
            'verify' => 0
        );
     $this->db->where('userid',$userid);
     return $this->db->update('users',$data);

    }

    public function delete($userid){
        $this->db->where('userid',$userid);
        return $this->db->delete('users');
    }

    public function getVerifyStatus($userid){
        $query = $this->db->get_where('users',array('userid'=>$userid));

        return $query->row(0)->verify;
    }
}