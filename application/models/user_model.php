<?php

class User_Model extends CI_Model {

    //put your code here



    public function get_division() {
        $this->db->select('*');
        $this->db->from('tbl_division');
        $query = $this->db->get();
        return $query->result();
    }

    public function save_post($data) {
        $this->db->insert('tbl_post', $data);
        redirect('user/posted', 'refresh');
    }

    public function my_post($user_id) {
        //$user_id= $this->session->user_data('user_id');
        $this->db->select('tbl_post.*,tbl_category.*,tbl_division.*,tbl_districts.*');
        $this->db->from('tbl_post');
        $this->db->join('tbl_category', 'tbl_post.category = tbl_category.id', 'right');
        $this->db->join('tbl_division', 'tbl_post.division = tbl_division.id', 'right');
        $this->db->join('tbl_districts', 'tbl_post.district = tbl_districts.id', 'right');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_post($post_id) {
        $this->db->where('id', $post_id);
        $this->db->delete('tbl_post');
        redirect('user/my_post', 'refresh');
    }

    public function search_home($data) {
        /*
          $this->db->select('*');
          $this->db->from('tbl_post');
          $this->db->join('tbl_category', 'tbl_post.category = tbl_category.id');
          $this->db->join('tbl_division', 'tbl_post.division = tbl_division.id');
          $this->db->join('tbl_districts', 'tbl_post.district = tbl_districts.id');
          $this->db->where('category',$data['f_category']);
          $this->db->where('division',$data['f_division']);
          $this->db->where('district',$data['f_district']);
          $this->db->like('area', "%".$data['area']."%");
         */
        $f_category = $data['f_category'];
        $f_division = $data['f_division'];
        $f_district = $data['f_district'];
        $f_area = $data['area'];

        if ($f_area == NULL) {
            $sql = "SELECT * FROM tbl_post,tbl_category,tbl_division,tbl_districts "
                    . " WHERE tbl_category.id = $f_category AND"
                    . " $f_category = tbl_post.category AND"
                    . " tbl_division.id = $f_division AND"
                    . " $f_division = tbl_post.division AND"
                    . " tbl_districts.id = $f_district AND"
                    . " $f_district = tbl_post.district";
        } else {
            $sql = "SELECT * FROM tbl_post,tbl_category,tbl_division,tbl_districts "
                    . " WHERE tbl_category.id = $f_category AND"
                    . " $f_category = tbl_post.category AND"
                    . " tbl_division.id = $f_division AND"
                    . " $f_division = tbl_post.division AND"
                    . " tbl_districts.id = $f_district AND"
                    . " $f_district = tbl_post.district AND"
                    . "tbl_post.area LIKE '%$f_area%' ";
        }
        //$query = $this->db->get();
        //$value = $query->result();

        $query = $this->db->query($sql);
        return $query->result_array();
        
        //return $value;
    }

}
