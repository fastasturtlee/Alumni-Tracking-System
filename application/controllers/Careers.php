<?php

class Careers extends CI_Controller{
    public function create(){
        $this->load->view('careers/create_career');
        
    }

    public function add(){
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('work_type','Work Type','required');
        $this->form_validation->set_rules('location','Location','required');
        $this->form_validation->set_rules('work_type','Work Type','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('admin/sidebar');
            $this->load->view('admin/header');
            $this->load->view('careers/create_career');
            $this->load->view('admin/footer');
        }else{
            $this->career_model->add();
            redirect('admin/careers');
        }
    }


    public function edit($career_id){
        $data['career'] = $this->career_model->getCareer($career_id);
        $this->load->view('careers/view',$data);
    }

    public function update(){
        $this->career_model->update();

        redirect('admin/careers');
    }

    public function unpublish($career_id){

        $this->career_model->unpublish($career_id);
        redirect('admin/careers');
    }

    public function publish($career_id){

        $this->career_model->publish($career_id);
        redirect('admin/careers');
    }

    public function delete($career_id){
        $this->career_model->delete($career_id);
        redirect('admin/careers');
    }
}