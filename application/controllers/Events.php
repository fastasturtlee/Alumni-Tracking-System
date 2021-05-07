<?php
class Events extends CI_Controller{
     
    public function create(){
        $this->load->view('events/create_event');
    }

    public function add(){
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('venue','Venue','required');
        $this->form_validation->set_rules('organizer_name','Organizer Name','required');
        $this->form_validation->set_rules('organizer_contact','Organizer phone no','required');
        $this->form_validation->set_rules('day','Day','required');
        $this->form_validation->set_rules('month','Month','required');
        $this->form_validation->set_rules('year','Year','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('admin/sidebar');
            $this->load->view('create_event');
        }else{
            $this->event_model->add();
            redirect('admin/events');
        }
    }

    public function edit($event_id){
        $data['event'] = $this->event_model->getEvent($event_id);

        $this->load->view('events/view',$data);
    }

    public function unpublish($event_id){

        $this->event_model->unpublish($event_id);
        redirect('admin/events');
    }

    public function publish($event_id){

        $this->event_model->publish($event_id);
        redirect('admin/events');
    }

    public function update(){
        $this->event_model->update();
        $currentuser = $this->input->post('currentuser');
        redirect($currentuser.'/events');
        
    }

    public function delete($event_id){
        $this->event_model->delete($event_id);
        redirect('admin/events');
    }
}