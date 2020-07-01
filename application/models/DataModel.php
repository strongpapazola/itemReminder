<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class DataModel extends CI_model {

	public function getAllbarang()
	{
		return $this->db->get('barang')->result_array();
	}

	public function getAllbarangbyid($id)
	{
		return $this->db->get_where('barang', ['id' => $id])->row_array();
	}

	public function getAllfinancebyid($id)
	{
		return $this->db->get_where('finance', ['id' => $id])->row_array();
	}

	public function getAllfinance()
	{
		return $this->db->get('finance')->result_array();
	}

	public function getAllwb()
	{
		return $this->db->get('note')->row_array();
	}

	public function getAllhwork()
	{
		return $this->db->get('hwork')->result_array();
	}
}
