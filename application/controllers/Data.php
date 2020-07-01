<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( !$this->session->userdata('username') ) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['items'] = $this->DataModel->getAllbarang();
		$data['title'] = 'Dashboard';
		$data['setPage'] = 1;
		$this->load->view('templates/header', $data);
		$this->load->view('data/sidebar');
		$this->load->view('data/navbar', $data);
		$this->load->view('data/dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('barang');
		redirect('data');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('name', 'name', 'required|trim');
		$this->form_validation->set_rules('amount', 'amount', 'numeric|required|trim');
		$this->form_validation->set_rules('ket', 'ket', 'required|trim');

		if ( $this->form_validation->run() ) {
			$inputan = [
				'name' => $this->input->post('name', True),
				'amount' => $this->input->post('amount', True),
				'ket' => $this->input->post('ket', True)
			];
			$this->db->insert('barang', $inputan);
			$this->session->set_flashdata('mesdata', 'Data successfully added!');
			redirect('data');
		} else {
			$data['title'] = 'Add Data';
			$data['setPage'] = 1;
			$this->load->view('templates/header', $data);
			$this->load->view('data/sidebar');
			$this->load->view('data/navbar', $data);
			$this->load->view('data/tambah');
			$this->load->view('templates/footer');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'name', 'required|trim');
		$this->form_validation->set_rules('amount', 'amount', 'numeric|required|trim');
		$this->form_validation->set_rules('ket', 'ket', 'required|trim');

		if ( $this->form_validation->run() ) {
			$inputan = [
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name', True),
				'amount' => $this->input->post('amount', True),
				'ket' => $this->input->post('ket', True)
			];
			$this->db->where('id', $inputan['id']);
			$this->db->update('barang', $inputan);
			$this->session->set_flashdata('mesdata', 'Data successfully edited!');
			redirect('data');
		} else {
			$data['barang'] = $this->DataModel->getAllbarangbyid($id);
			$data['title'] = 'Edit Data';
			$data['setPage'] = 1;
			$this->load->view('templates/header', $data);
			$this->load->view('data/sidebar');
			$this->load->view('data/navbar', $data);
			$this->load->view('data/edit');
			$this->load->view('templates/footer');
		}
	}
}
