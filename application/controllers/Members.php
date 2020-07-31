<?php
class Members extends CI_Controller
{
    public function index()
    {
        $this->load->view('member_manage');
    }

    public function add_member()
    {
        $check=$this->my_model->find_member($this->input->post('id'));
        if($check)
        {
            $this->session->set_flashdata('user_found','users are already exists');
            redirect('members');
        }
        else
        {
            $data=$this->input->post();
            $res=$this->my_model->insert('member_list',$data);
            if(res)
            {
                $this->session->set_flashdata('msg','Member Added');
                redirect('members');
            }
            else
            {
                $this->session->set_flashdata('msg','Member not Added');
            }
        }



    }

    public function member_list()
    {
        $data['members']=$this->my_model->get('member_list');
        $this->load->view('member_list',$data);
    }

} 