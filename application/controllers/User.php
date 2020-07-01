<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['items'] = $this->DataModel->getAllbarang();
		$data['title'] = 'Dashboard';
		$data['setPage'] = 3;
		$this->load->view('templates/header', $data);
		$this->load->view('data/sidebar');
		$this->load->view('data/navbar', $data);
		$this->load->view('user/user', $data);
		$this->load->view('templates/footer');
    }
}
