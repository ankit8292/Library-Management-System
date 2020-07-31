<?php
class My_model extends CI_Model
{
	public function login_admin($un,$ps)
	{
		$query=$this->db->select(['un','ps'])->from('admin')->where('un',$un)->where('ps',$ps)->get();
		return $query->row();
    }
    
    public function insert($tbl_name,$data)
    {

        return $this->db->insert($tbl_name, $data);
         
    }

    public function get($tbl_name)
    {
        $query=$this->db->get($tbl_name);
        return $query->result_array();
    }

    public function delete($id,$tbl_name)
    {
        $this->db->where('id', $id);
        $this->db->delete($tbl_name);
 
    }

    public function find_member($id)
    {
        $this->db->where('id', $id);
        $result= $this->db->get('member_list');
        if($result->num_rows()==1)
        {
            return $result->row_array();
        }
        else
        {
            return false;
        }
        
 
    }

    public function check_book()
    {
        $this->db->where('user_id', $this->input->post('user_id'));
        $this->db->where('book_name', $this->input->post('book_name'));
        $result= $this->db->get('issue_book');
        if($result->num_rows()==1)
        {
            return $result->row_array();
        }
        else
        {
            return false;
        }
        
 
    }


    public function check_user()
    {
        $this->db->where('user_id', $this->input->post('user_id'));
        $result= $this->db->get('issue_book');
        if($result->num_rows()>2)
        {
            return $result->row->user_id;
        }
        else
        {
            return false;
        }
        
 
    }


}