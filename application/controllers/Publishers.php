<?php
class Publishers extends CI_Controller
   {
    public function index()
    {
        
       $data['publishers']=$this->my_model->get('publisher_list');
       $this->load->view('add_publisher',$data);
    }

    public function add_publisher()
    {
        
        
        $this->form_validation->set_rules('pname', 'Publisher Name', 'required');
        if($this->form_validation->run()===FALSE)
        {
            $data['publishers']=$this->my_model->get('publisher_list');
            $this->load->view('add_publisher',$data);
            
        }
        else
        {
            $data=array(
                'name' =>$this->input->post('pname')
                );
            $res=$this->my_model->insert('publisher_list', $data);
           
            if($res)
            {
                $this->session->set_flashdata('msg','1');
                redirect('publishers');
            }
            else
            {
                $this->session->set_flashdata('msg','0');
                redirect('publishers');
            }
        }
    }

    public function delete_publisher($id)
    {
        $this->my_model->delete($id,'publisher_list');
        $this->session->set_flashdata('msg','publisher_deleted');
        redirect('publishers');
    }
    
} 