<?php 

class Ern_No extends CI_Controller{

    public function create(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'csv';
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('csv_file'))
        {
            $data['ern_nos'] = $this->ern_no_model->getErn();
                $data['error'] = array('error' => $this->upload->display_errors());
                $this->load->view('ern_no/ern_no',$data);
        }
        else
        {
                $file_data = $this->upload->data();
                 $file_path =  './uploads/'.$file_data['file_name'];
                $data = array('upload_data' => $this->upload->data());
                if ($this->csvimport->get_array($file_path)) {
                        $csv_array = $this->csvimport->get_array($file_path);
                        foreach ($csv_array as $row) {
                            $insert_data = array(
                                'ern_no'=>$row['ern_no']
                            );
                            if($this->ern_no_model->repeat($insert_data)){
                                continue;
                            }else{
                            $this->ern_no_model->insert_csv($insert_data);
                            }
                        }               
                $data['ern_nos'] = $this->ern_no_model->getErn();
                unlink($file_path);
                $this->load->view('ern_no/ern_no',$data);
        }
}
    }

    public function delete($id){
        $this->ern_no_model->delete($id);
        redirect('ern_no/create');
    }

}
