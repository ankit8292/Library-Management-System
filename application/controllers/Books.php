<?php
class Books extends CI_Controller
{
    public function index()
    {
        
        $data['authors']=$this->my_model->get('author_list');
        $data['publishers']=$this->my_model->get('publisher_list');
        $this->load->view('add_book',$data);
    }

    public function add_book()
    {
        $data=$this->input->post();
        $res=$this->my_model->insert('book_list',$data);
        if(res)
        {
            $this->session->set_flashdata('msg','Book Added');
            redirect('books');
        }
        else
        {
            $this->session->set_flashdata('msg','Book not Added');
        }



    }

    public function book_list()
    {
        $data['books']=$this->my_model->get('book_list');
        $this->load->view('book_list',$data);
    }

} 