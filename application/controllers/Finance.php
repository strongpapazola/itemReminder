<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( !$this->session->userdata('username') ) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['items'] = $this->DataModel->getAllfinance();
		$data['title'] = 'Finance';
		$data['setPage'] = 2;
		$this->load->view('templates/header', $data);
		$this->load->view('data/sidebar');
		$this->load->view('data/navbar', $data);
		$this->load->view('finance/dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('finance');
		redirect('finance');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('income', 'income', 'numeric|trim');
		$this->form_validation->set_rules('spending', 'spending', 'numeric|trim');
		$this->form_validation->set_rules('balance', 'balance', 'required|trim');
		$this->form_validation->set_rules('information', 'information', 'required|trim');

		if ( $this->form_validation->run() ) {
			$inputan = [
				'income' => $this->input->post('income', True),
				'spending' => $this->input->post('spending', True),
				'balance' => $this->input->post('balance', True),
				'information' => $this->input->post('information', True)
			];
			$this->db->insert('finance', $inputan);
			$this->session->set_flashdata('mesdata', 'Data finance successfully added!');
			redirect('finance');
		} else {
			$data['title'] = 'Add Data';
			$data['setPage'] = 2;
			$this->load->view('templates/header', $data);
			$this->load->view('data/sidebar');
			$this->load->view('data/navbar', $data);
			$this->load->view('finance/tambah');
			$this->load->view('templates/footer');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('income', 'income', 'numeric|trim');
		$this->form_validation->set_rules('spending', 'spending', 'numeric|trim');
		$this->form_validation->set_rules('balance', 'balance', 'required|trim');
		$this->form_validation->set_rules('information', 'information', 'required|trim');

		if ( $this->form_validation->run() ) {
			$inputan = [
				'id' => $this->input->post('id', True),
				'income' => $this->input->post('income', True),
				'spending' => $this->input->post('spending', True),
				'balance' => $this->input->post('balance', True),
				'information' => $this->input->post('information', True)
			];
			$this->db->where('id', $inputan['id']);
			$this->db->update('finance', $inputan);
			$this->session->set_flashdata('mesdata', 'Data finance successfully edited!');
			redirect('finance');
		} else {
			$data['finance'] = $this->DataModel->getAllfinancebyid($id);
			$data['title'] = 'Edit Data';
			$data['setPage'] = 2;
			$this->load->view('templates/header', $data);
			$this->load->view('data/sidebar');
			$this->load->view('data/navbar', $data);
			$this->load->view('finance/edit', $data);
			$this->load->view('templates/footer');
		}
	}
}
