<?php
	class Posts extends CI_Controller{
		public function index(){

			$data['title'] = 'Posts';

			$data['posts'] = $this->Model_posts->get_posts();

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
            
		}
		
		public function view($url = NULL){
			$data['post'] = $this->Model_posts->get_posts($url);

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] =$data['post']['title'];

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = 'Create Post';

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Content', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');

			}else{
				$this->Model_posts->create_posts();
				redirect('posts');
				
			}
			}

			public function delete($id){
				$this->Model_posts->delete_post($id);
				redirect('posts');
			}


		
	}