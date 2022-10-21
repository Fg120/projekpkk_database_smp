<?php
class Jabatan_model  extends CI_Model
{

	public function tambahDataJabatan($data)
	{
		$this->db->insert('jabatan', $data);
	}

	public function editDataJabatan($id)
	{
		return $this->db->get_where('jabatan', ['id_jabatan' => $id])->row_array();
	}

	public function updateDataJabatan()
	{
		$data = [
			"nama_jabatan" => $this->input->post('nama_jabatan', true),
		];
		$this->db->where('id_jabatan', $this->input->post('id_jabatan'));
		$this->db->update('jabatan', $data);
	}
}
