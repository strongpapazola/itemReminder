<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	private function _secure()
	{
		if ( $this->session->userdata('username') ) {
			redirect('data');
		}
	}

	public function index()
	{
		$this->_secure();
		$this->form_validation->set_rules('username', 'username' ,'required|trim');
		$this->form_validation->set_rules('password', 'password' ,'required|min_length[3]');

		if ( $this->form_validation->run() == False ) {
			$data['title'] = 'Login Page';
			$this->load->view('templates/authheader', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/authfooter');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$this->_secure();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		if ( $user ) {
			if ( password_verify($password, $user['password']) ) {
				$data = [
					'username' => $username,
				];
				$this->session->set_userdata($data);
				redirect('data');
			} else {
			$this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">
				Wrong password!
			</div>');
			redirect('auth/index');
			}
		} else {
			$this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">
				User not registered!
			</div>');
			redirect('auth/index');
		}
	}

	public function register($pass = '')
	{
		if ( password_verify($pass, '$2y$10$QQr9YXofMnhY3kHaHiXy1O/hNCHY9RWJRYQ.gJLclyd6lN8HlQSs6') == False ) {
			redirect('auth');
		}
		$this->_secure();
		$this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]', [
			'is_unique' => 'The username already register'
		]);
		$this->form_validation->set_rules('password1', 'password', 'required|min_length[3]|matches[password2]', [
			'min_length' => 'The password too short',
			'matches' => 'The password not same'
		]);
		$this->form_validation->set_rules('password2', 'password', 'matches[password1]', [
			'matches' => 'The password not same'
		]);

		if ( $this->form_validation->run() == False ) {
			$data['title'] = 'Register Page';
			$this->load->view('templates/authheader', $data);
			$this->load->view('auth/register');
			$this->load->view('templates/authfooter');		
		} else {
			$password = $this->input->post('password1');
			$data = [
				'username' => $this->input->post('username', True),
				'password' => password_hash($password, PASSWORD_DEFAULT),
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('messege', '<div class="alert alert-success" role="alert">
				User already registered!
			</div>');
			redirect('auth/index');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('messege', '<div class="alert alert-success" role="alert">
				Logout successfully!
			</div>');
		redirect('auth');
	}
}
