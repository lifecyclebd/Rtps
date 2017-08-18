<?php

class Super_Admin_Model extends CI_Model {
    public function save_catagory($data){
        $this->db->insert('tbl_category', $data);
        $sdata= array();
        $sdata['msg']='Category Added..!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/catagory');
    }
    public function select_catagory() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function save_admin($data){
        $this->db->insert('tbl_admin', $data);
        $sdata= array();
        $sdata['msg']='Admin Added..!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_admin');
    }
    public function select_admin() {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function select_division() {
        $this->db->select('*');
        $this->db->from('tbl_division');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    function get_division()
    {
        $result = $this->db->get('tbl_division')->result();;
        $id = array('0');
        $name = array('Select Division');
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->div_name);
        }
        return array_combine($id, $name);
    }
    public function select_district() {
        $this->db->select('*');
        $this->db->from('tbl_districts');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    function get_district($cid=NULL)
    {
        $result = $this->db->where('division_id', $cid)->get('tbl_districts')->result();
        $id = array('0');
        $name = array('Select District');
        for ($i=0; $i<count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($name, $result[$i]->district_name);
        }
        return array_combine($id, $name);
    }
    
    public function select_all_post(){
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->join('tbl_category', 'tbl_post.category = tbl_category.id');
        $this->db->join('tbl_division', 'tbl_post.division = tbl_division.id');
        $this->db->join('tbl_districts', 'tbl_post.district = tbl_districts.id');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}
