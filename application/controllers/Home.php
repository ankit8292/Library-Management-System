<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function index()
    {
        $this->load->view('home');
    }

    public function login()
    {
        // if($this->session->userdata('un'))
        // {
        //     redirect('home/dashboard');
        // }

        $un=$this->input->post('un');
        $ps=$this->input->post('ps');
        $r=$this->input->post('r');
        $res=$this->my_model->login_admin($un, $ps);

        if($res)
        {
            $this->session->set_userdata('un', $un);
            redirect('home/dashboard');
            echo "Logged in";
        }
        else
        {
            echo "Wrong User";
            redirect('home');
        }
    }

    public function dashboard()
    {
        $session=$this->session->userdata('un');
        if(!$session)
        {
            redirect('home');
        }
        else
        {
            //redirect('home/dashboard');
            $this->load->view('dash');
        }
        
    }

    public function logout()
    {
        $this->session->unset_userdata('un');
        if(!$session)
        {
            redirect('home');
        }
        
    }

    public function book_stock_manage()
    {
        $this->load->view('book_stock_manage');
        
    }



}