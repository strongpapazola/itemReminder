<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wboard extends CI_Controller {

    public function index()
    {
    $data['note'] = $this->DataModel->getAllwb();
	$data['title'] = 'Whiteboard';
	$data['setPage'] = 4;
	$this->load->view('templates/header', $data);
	$this->load->view('data/sidebar', $data);
	$this->load->view('data/navbar', $data);
	$this->load->view('wb/index', $data);
	$this->load->view('templates/footer');
	if ( $this->input->post('wb') ) {
		$datainput = [
			'id' => $this->input->post('id', True),
			'text' => $this->input->post('wb')
		];
		$this->db->where('id', $datainput['id']);
		$this->db->update('note', $datainput);
		redirect('wboard');

	}
    }
}
