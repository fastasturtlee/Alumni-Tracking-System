<?php 

class Search extends CI_Controller{
    public function result(){
        $this->form_validation->set_rules('search_bar','ERN NO/username/full name/branch/','trim|required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('admin/sidebar');
            $this->load->view('admin/header');
            $this->load->view('admin/search');
            $this->load->view('admin/footer');
        }else{
            $name = $this->input->post('search_bar');
            $data['infos'] = $this->search_model->getResult($name);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/header');
            $this->load->view('search/view',$data);
            $this->load->view('admin/footer');
        }
    }
}