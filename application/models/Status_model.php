<?php
class Status_model  extends CI_Model
{

	public function tambahDataStatus($data)
	{
		$this->db->insert('status', $data);
	}

	public function editDataStatus($id)
	{
		return $this->db->get_where('status', ['id_status' => $id])->row_array();
	}

	public function updateDataStatus()
	{
		$data = [
			"nama_status" => $this->input->post('nama_status', true),
		];
		$this->db->where('id_status', $this->input->post('id_status'));
		$this->db->update('status', $data);
	}
}
