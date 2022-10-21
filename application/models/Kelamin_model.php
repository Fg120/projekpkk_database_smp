<?php
class Kelamin_model  extends CI_Model
{

	public function tambahDataKelamin($data)
	{
		$this->db->insert('kelamin', $data);
	}

	public function editDataKelamin($id)
	{
		return $this->db->get_where('kelamin', ['id_kelamin' => $id])->row_array();
	}

	public function updateDataKelamin()
	{
		$data = [
			"nama_kelamin" => $this->input->post('nama_kelamin', true),
		];
		$this->db->where('id_kelamin', $this->input->post('id_kelamin'));
		$this->db->update('kelamin', $data);
	}
}
