<?php
class Kelas_model  extends CI_Model
{
	// private $conn = null;	
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('Koneksi_database');
	// 	$this->conn = $this->koneksi_database->connect();
	// }

	public function tambahDataKelas($data)
	{
		$this->db->insert('kelas', $data);
	}

	public function editDataKelas($id)
	{
		return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
	}

	public function updateDataKelas()
	{
		$data = [
			"nama_kelas" => $this->input->post('nama_kelas', true),
		];
		$this->db->where('id_kelas', $this->input->post('id_kelas'));
		$this->db->update('kelas', $data);
	}
}
