<?php

class User extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->model('user_model', 'u_model');
        $this->load->model('super_admin_model', 'sa_model');
    }

    public function index() {
        $data = array();
        $data['category'] = $this->sa_model->select_catagory();
        $data['division'] = $this->sa_model->get_division();
        $data['district'] = $this->sa_model->get_district();
        $data['user_content'] = $this->load->view('post_form', $data, TRUE);
        $id = $this->session->userdata('id');
        if ($id != null) {
            $data['main_content'] = $this->load->view('dashbord', $data, TRUE);
        } else {
            redirect('Welcome');
        }
        $data['title'] = "Dash Bord";
        $this->load->view('master', $data);
    }

    public function post_add() {
        $data = array();
        $category = $this->input->post('submit');





        if (!empty($_FILES['image_1']['name'])) {
            // Specify configuration for File 1
            $config['file_name'] = $this->input->post('image_1',TRUE). date() . time();
            $config['upload_path'] = 'images/uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width'] = '1024000';
            $config['max_height'] = '768000';

            // Initialize config for File 1
            $this->upload->initialize($config);

            // Upload file 1
            //$file1='image_1'.date().time();
            if ($this->upload->do_upload('image_1')) {
                $arry = $this->upload->data();
                $url = $arry['file_name'];
                $data['image_1'] = $url;
            } else {
                echo $this->upload->display_errors();
            }
        }

        // Do we have a second file?
        if (!empty($_FILES['image_2']['name'])) {
            // Specify configuration for File 1
            $config['file_name'] = $this->input->post('image_2',TRUE). date() . time();
            $config['upload_path'] = 'images/uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width'] = '1024000';
            $config['max_height'] = '768000';

            // Initialize config for File 1
            $this->upload->initialize($config);

            // Upload file 1
            if ($this->upload->do_upload('image_2')) {
                $arry = $this->upload->data();
                $url = $arry['file_name'];
                $data['image_2'] = $url;
            } else {
                echo $this->upload->display_errors();
            }
        }
        if (!empty($_FILES['image_3']['name'])) {
            // Specify configuration for File 1
            $config['file_name'] = $this->input->post('image_3',TRUE). date() . time();
            $config['upload_path'] = 'images/uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width'] = '1024000';
            $config['max_height'] = '768000';

            // Initialize config for File 1
            $this->upload->initialize($config);

            // Upload file 1
            if ($this->upload->do_upload('image_3')) {
                $arry = $this->upload->data();
                $url = $arry['file_name'];
                $data['image_3'] = $url;
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data['division'] = $this->input->post('division', TRUE);
        $data['district'] = $this->input->post('district', TRUE);
        $data['target_month'] = $this->input->post('target_month', TRUE);
        $data['area'] = $this->input->post('area', TRUE);
        $data['category'] = $this->input->post('category', TRUE);
        $data['rent'] = $this->input->post('rent', TRUE);
        $data['contact'] = $this->input->post('contact', TRUE);
        $data['address'] = $this->input->post('address', TRUE);
        $data['detail'] = $this->input->post('detail', TRUE);
        $data['user_id'] = $this->session->userdata('id');

        if ($category == 'family') {
            $data['floor'] = $this->input->post('family_floor', TRUE);
            $data['generator'] = $this->input->post('family_generator', TRUE);
            $data['bedroom'] = $this->input->post('family_bedroom', TRUE);
            $data['bathroom'] = $this->input->post('family_bathroom', TRUE);
            $data['parking'] = $this->input->post('family_parking', TRUE);
            $data['lift'] = $this->input->post('family_lift', TRUE);
        } else if ($category == 'shop') {
            $data['market_name'] = $this->input->post('shop_market_name', TRUE);
            $data['floor'] = $this->input->post('shop_floor', TRUE);
            $data['square_feet'] = $this->input->post('shop_square_feet', TRUE);
            $data['ceiling'] = $this->input->post('shop_ceiling', TRUE);
        } else if ($category == 'bachelor') {
            $data['floor'] = $this->input->post('bachelor_floor', TRUE);
            $data['bedroom'] = $this->input->post('bachelor_bedroom', TRUE);
            $data['bathroom'] = $this->input->post('bachelor_bathroom', TRUE);
        } else if ($category == 'sublet') {
            $data['floor'] = $this->input->post('sublet_floor', TRUE);
            $data['outer_door'] = $this->input->post('outer_door', TRUE);
            $data['bedroom'] = $this->input->post('sublet_bedroom', TRUE);
            $data['attached_bath'] = $this->input->post('sublet_attached_bath', TRUE);
        } else if ($category == 'hostel') {
            $data['h_name'] = $this->input->post('hostel_h_name', TRUE);
            $data['floor'] = $this->input->post('hostel_floor', TRUE);
            $data['room_mate'] = $this->input->post('hostel_room_mate', TRUE);
            $data['available_seat'] = $this->input->post('hostel_available_seat', TRUE);
            $data['dining_facility'] = $this->input->post('hostel_dining_facility', TRUE);
            $data['h_category'] = $this->input->post('hostel_h_category', TRUE);
            $data['attached_bath'] = $this->input->post('hostel_attached_bath', TRUE);
        } else if ($category == 'godown') {
            $data['market_name'] = $this->input->post('godown_market_name', TRUE);
            $data['floor'] = $this->input->post('godown_floor', TRUE);
            $data['square_feet'] = $this->input->post('godown_square_feet', TRUE);
            $data['ceiling'] = $this->input->post('godown_ceiling', TRUE);
        } else if ($category == 'office') {
            $data['floor'] = $this->input->post('office_floor', TRUE);
            $data['bedroom'] = $this->input->post('office_bedroom', TRUE);
            $data['square_feet'] = $this->input->post('office_square_feet', TRUE);
            $data['bathroom'] = $this->input->post('office_bathroom', TRUE);
            $data['parking'] = $this->input->post('office_parking', TRUE);
            $data['lift'] = $this->input->post('office_lift', TRUE);
        } else if ($category == 'garage') {
            $data['square_feet'] = $this->input->post('garage_square_feet', TRUE);
            $data['ceiling'] = $this->input->post('garage_ceiling', TRUE);
            $data['vehicle_type'] = $this->input->post('vehicle_type', TRUE);
            $data['vehicle_quantity'] = $this->input->post('vehicle_quantity', TRUE);
        } else if ($category == 'mess') {
            $data['h_name'] = $this->input->post('mess_h_name', TRUE);
            $data['floor'] = $this->input->post('mess_floor', TRUE);
            $data['room_mate'] = $this->input->post('mess_room_mate', TRUE);
            $data['available_seat'] = $this->input->post('mess_available_seat', TRUE);
            $data['dining_facility'] = $this->input->post('mess_dining_facility', TRUE);
            $data['h_category'] = $this->input->post('mess_h_category', TRUE);
            $data['attached_bath'] = $this->input->post('mess_attached_bath', TRUE);
        } else if ($category == 'family/bachelor') {
            $data['floor'] = $this->input->post('family_bachelor_floor', TRUE);
            $data['generator'] = $this->input->post('family_bachelor_generator', TRUE);
            $data['bedroom'] = $this->input->post('family_bachelor_bedroom', TRUE);
            $data['bathroom'] = $this->input->post('family_bachelor_bathroom', TRUE);
            $data['parking'] = $this->input->post('family_bachelor_parking', TRUE);
            $data['lift'] = $this->input->post('family_bachelor_lift', TRUE);
        }
        $this->u_model->save_post($data);
    }

    public function posted() {
        $data = array();
        $data['user_content'] = $this->load->view('posted', $data, TRUE);
        $data['main_content'] = $this->load->view('dashbord', $data, TRUE);
        $data['title'] = "Dash Bord";
        $this->load->view('master', $data);
    }

    public function my_post() {
        $id = $this->session->userdata('id');
        $data = array();
        $data['post'] = $this->u_model->my_post($id);
        $data['user_content'] = $this->load->view('my_post', $data, TRUE);
        $data['main_content'] = $this->load->view('dashbord', $data, TRUE);
        $data['title'] = "Dash Bord";
        $this->load->view('master', $data);
    }

    public function delete_post() {
        $id = $this->uri->segment(3);
        $this->u_model->delete_post($id);
    }

    public function search_home() {
        $data = array();
        $data['category'] = $this->sa_model->select_catagory();
        $data['division'] = $this->sa_model->get_division();
        $data['district'] = $this->sa_model->get_district();
        $data['f_category'] = $this->input->post('category', TRUE);
        $data['f_division'] = $this->input->post('division', TRUE);
        $data['f_district'] = $this->input->post('district', TRUE);
        $data['area'] = $this->input->post('target_area', TRUE);
        $data['search_data'] = $this->u_model->search_home($data);
        //$data['search_content'] = $this->load->view('search_home', $data, TRUE);

        $data['main_content'] = $this->load->view('search_home_result', $data, TRUE);
        $data['title'] = "Find Home";
        $this->load->view('master', $data);
    }

}
