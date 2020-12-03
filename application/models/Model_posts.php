<?php
    class Model_posts extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_posts($url = FALSE){
            if($url === FALSE){
                $this->db->order_by('id' ,'DESC');
                $query = $this->db->get('posts');
                return $query->result_array();
            }
            $query = $this->db->get_where('posts', array('url' =>$url));
            return $query->row_array();
        }

        public function create_posts(){
            $url = url_title($this->input->post('title'));

            $data = array(
                'title' => $this->input->post('title'),
                'url' => $url,
                'body' => $this->input->post('content'),
            );

            return $this->db->insert('posts', $data);

        }

        public function delete_post($id){
            $this->db->where('id', $id);
            $this->db->delete('posts');
            return true;
        }


    }

