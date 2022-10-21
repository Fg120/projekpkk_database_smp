<?php
class Agama_model  extends CI_Model
{

	public function tambahDataAgama($data)
	{
		$this->db->insert('agama', $data);
	}

	public function editDataAgama($id)
	{
		return $this->db->get_where('agama', ['id_agama' => $id])->row_array();
	}

	public function updateDataAgama()
	{
		$data = [
			"nama_agama" => $this->input->post('nama_agama', true),
		];
		$this->db->where('id_agama', $this->input->post('id_agama'));
		$this->db->update('agama', $data);
	}
}
