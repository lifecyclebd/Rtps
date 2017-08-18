<?php
//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('welcome_model', 'w_model');
        $this->load->model('user_model', 'u_model');
        $this->load->model('super_admin_model', 'sa_model');
    }

    public function index() {
        $data = array();
        $data['main_content'] = $this->load->view('home_content', '', TRUE);
        $data['title'] = "Tolet Bazar";
        $this->load->view('master', $data);
    }

    public function find_home() {
        $data = array();
        $data['category']= $this->sa_model->select_catagory();
        $data['division']= $this->sa_model->get_division();
        $data['district']= $this->sa_model->get_district();
        $data['allpost']=$this->sa_model->select_all_post();
        //$data['user_content'] = $this->load->view('all_home', $data, TRUE);
        $data['main_content'] = $this->load->view('find_home', $data, TRUE);
        $data['title'] = "Find Home";
        $this->load->view('master', $data);
    }
    function populate_district()
    {
        $id = $this->input->post('id');
        echo(json_encode($this->sa_model->get_district($id)));
    }

    public function post_add() {
        $data = array();
        $id = $this->session->userdata('id');
        if($id==null){
            $data['main_content'] = $this->load->view('post_add', '', TRUE);
        }else{
            redirect('Welcome');
        }
        $data['title'] = "Post Add";
        $this->load->view('master', $data);
    }

    public function contact() {
        $data = array();
        $data['main_content'] = $this->load->view('contact', '', TRUE);
        $data['title'] = "Contact";
        $this->load->view('master', $data);
    }

    public function add_user() {
        $data = array();
        $data['name'] = $this->input->post('name', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['password'] = $this->input->post('password', TRUE);
        $data['confirm_password'] = $this->input->post('confirm_password', TRUE);
        $this->w_model->save_user($data);
    }

    public function login() {
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $result = $this->w_model->login_check($email, $password);
        $sdata = array();
        if ($result) {
            $sdata['name'] = $result->name;
            $sdata['id'] = $result->id;
            $this->session->set_userdata($sdata);
            redirect('user');
        } else {
            $sdata['message'] = 'Wrong User or Password ';
            $this->session->set_userdata($sdata);
            redirect('Welcome/post_add');
        }
    }

    public function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('message');
        redirect('welcome');
    }

}
