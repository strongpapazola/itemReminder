<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hwork extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( !$this->session->userdata('username') ) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['items'] = $this->DataModel->getAllhwork();
		$data['title'] = 'HomeWork';
		$data['setPage'] = 5;
		$this->load->view('templates/header', $data);
		$this->load->view('data/sidebar');
		$this->load->view('data/navbar', $data);
		$this->load->view('hwork/index', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('hwork');
		redirect('hwork');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('name', 'name', 'required|trim');
		$this->form_validation->set_rules('deadline', 'deadline', 'required|trim');
		$this->form_validation->set_rules('ket', 'ket', 'required|trim');

		if ( $this->form_validation->run() ) {
			$inputan = [
				'name' => $this->input->post('name', True),
				'deadline' => strtotime($this->input->post('deadline', True)),
				'info' => $this->input->post('ket', True)
            ];
			$this->db->insert('hwork', $inputan);
			$this->session->set_flashdata('mesdata', 'Data successfully added!');
			redirect('hwork');
		} else {
			$data['title'] = 'Add Hwork';
			$data['setPage'] = 5;
			$this->load->view('templates/header', $data);
			$this->load->view('data/sidebar');
			$this->load->view('data/navbar', $data);
			$this->load->view('hwork/tambah');
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
			$this->db->update('hwork', $inputan);
			$this->session->set_flashdata('mesdata', 'Data successfully edited!');
			redirect('data');
		} else {
			$data['hwork'] = $this->DataModel->getAllhworkbyid($id);
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
