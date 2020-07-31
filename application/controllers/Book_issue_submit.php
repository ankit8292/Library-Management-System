<?php
class Book_issue_submit extends CI_Controller
{
    public function index()
    {
        $this->load->view('book_issue_submit');
    }

    public function filter_member()
    {
        $results['results']=$this->my_model->find_member($this->input->post('id'));
        $results['book_list']=$this->my_model->get('book_list');
       // print_r($results);
        if($results )
        {
            $this->load->view('book_issue_submit', $results);
            
        }
        else
        {
            $this->session->set_flashdata('msg','Users not found');
            redirect('book_issue_submit');
        }


    }

    public function issue_book()
    {
        $data=$this->input->post();
        $res=$this->my_model->insert('issue_book',$data);
        $checkStatus=$this->my_model->check_book();
        //$res=$this->my_model->get('issue_book');
        //$check_status2=$this->my_model->check_user();
        if($checkStatus)
        {
            $this->session->set_flashdata('booked_issue','Book is already issued');
            redirect('book_issue_submit');
        }
        // else if(sizeof($check_status2)>2)
        // {
        //     $this->session->set_flashdata('booked_issue','Two Books are already issued');
        //     redirect('book_issue_submit');
        // }
        else
        {
            if($res)
            {
                $this->session->set_flashdata('booked_issue','Book is issued');
                redirect('book_issue_submit');
            }

            else
            {
                $this->session->set_flashdata('book_not_issue','Book is not issued');
            }
        }
        
    }

    public function issue_book_list()
    {
        
        $data['issue_book_list']=$this->my_model->get('issue_book');
        // print_r($data);
        // print_r($issue_book_list);
        if($data)
        {
            //$this->session->set_flashdata('booked_issue','Book is issued');
            //redirect('book_issue_submit');
            $this->load->view('issue_book_list',$data);

        }

        else
        {
            $this->session->set_flashdata('book_not_issue','Book is not issued');
        }
        
    }

    public function sub_book()
    {
        $data['issue_book_list']=$this->my_model->get('issue_book');
        
       $data1=array(
           'id'=>$this->input->post($issue_book_list[]),
           'name'=>$this->input->post(''),
           'book_name'=>$this->input->post(''),
           'email'=>$this->input->post('')

       );
        
    }

} 