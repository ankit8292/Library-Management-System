<?php
class Authors extends CI_Controller
   {
    public function index()
    {
        
       $data['authors']=$this->my_model->get('author_list');
       $this->load->view('add_author',$data);
    }

    public function add_author()
    {
        
        $data['authors']=$this->my_model->get('author_list');
        $this->form_validation->set_rules('aname', 'Author Name', 'required');

        if($this->form_validation->run()===FALSE)
        {
            $this->load->view('add_author',$data);
            
        }

        else
        {
            $data=array(
                'name' =>$this->input->post('aname')
                );
            $res=$this->my_model->insert('author_list', $data);
           
            if($res)
            {
                $this->session->set_flashdata('msg','1');
                redirect('authors');
            }
            else
            {
                $this->session->set_flashdata('msg','0');
                redirect('authors');
            }
        }

    }

    public function delete_author($id)
    {
        $this->my_model->delete($id,'author_list');
        $this->session->set_flashdata('msg','author_deleted');
        redirect('authors');
    }

} 