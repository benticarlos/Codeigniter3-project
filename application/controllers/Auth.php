<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Auth_model");
		}

		public function login() {
			// $data = new stdClass();
			// $data->title = "CI3 Project"
			$data["title"] = "CI3 Project | Login";
			$data["content"] = "auth/login";
			$data["panel_title"] = "Login";
			$data["active"] = "login";
			$this->load->view('frontend', $data);
		}

		public function signin() {
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[150]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			if ($this->form_validation->run() == FALSE) {
                        $this->login();
                }
                else {
                       $email = $this->input->post('email');
                       $pass = $this->input->post('password');
                       $user = $this->Auth_model->getUser($email);
                       if(!$user) {
                       		$this->session->set_flashdata("error_message", "User Data are Incorrects");
                       		redirect(base_url().'login');
                       }
                       if($user->user_pass != sha1(md5($pass))) {
                       		$this->session->set_flashdata("error_message", "User Data are Incorrects");
                       		redirect(base_url().'login');
                       }
                       $_SESSION['userid'] = $user->idu;
                       $_SESSION['user_mail'] = $user->user_mail;
                       $_SESSION['is_logged_in'] = TRUE;
                       $this->session->set_flashdata("success_message", "Welcome " . $_SESSION['user_mail']);
                       		redirect(base_url());
                }
		}
		public function logout(){
			session_destroy();
			redirect();
		}
	}

?>