<?php
class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model', 'a_model');
        $id= $this->session->userdata('admin_id');
        if($id != NULL){
            redirect('super_admin','refresh');
        }
        
    }

    public function index() {
        $this->load->view('admin/login');
    }

    public function admin_login_check() {

        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $result = $this->a_model->admin_login_check_info($email, $password);
        
        $sdata=array();
        if ($result) {
            $sdata['admin_id']=$result->id;
            $sdata['admin_name']=$result->name;
            $sdata['admin_status']=$result->status;
            $this->session->set_userdata($sdata);
            redirect('super_admin');
        }else {
            $sdata['msg']='Email or Password Invalid..!!';
            $this->session->set_userdata($sdata);
            redirect('admin');
        }
    }

}