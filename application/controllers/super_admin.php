<?php
//session_start();
class Super_Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model');
        $id= $this->session->userdata('admin_id');
        if($id == NULL){
            redirect('admin','refresh');
        }
    }
    public function index(){
        $data['admin_main_content'] = $this->load->view('admin/dashboard', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function catagory(){
        $data=array();
        $data['category']= $this->sa_model->select_catagory();
        $data['admin_main_content'] = $this->load->view('admin/catagory', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function add_catagory(){
        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $this->sa_model->save_catagory($data);
    }
    public function admin(){
        $data=array();
        $data['admin_main_content'] = $this->load->view('admin/add_admin', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_admin(){
        $data = array();
        $data['name'] = $this->input->post('name', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['password'] = $this->input->post('password', TRUE);
        $this->sa_model->save_admin($data);
    }
    public function manage_admin(){
        $data=array();
        $data['admin']= $this->sa_model->select_admin();
        $data['admin_main_content'] = $this->load->view('admin/manage_admin', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function manage_division(){
        $data=array();
        $data['division']= $this->sa_model->select_division();
        $data['admin_main_content'] = $this->load->view('admin/manage_division', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function manage_district(){
        $data=array();
        $data['district']= $this->sa_model->select_district();
        $data['admin_main_content'] = $this->load->view('admin/manage_district', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
    
    
    
    public function logout(){
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_status');
        $sdata=array();
        $sdata['msg']='Logout Complete..!!';
        $this->session->set_userdata($sdata);
        redirect('admin');
    }
    
   
    
}
