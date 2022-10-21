<?php
class Mapel_model  extends CI_Model
{

	public function tambahDataMapel($data)
	{
		$this->db->insert('mapel', $data);
	}

	public function editDataMapel($id)
	{
		return $this->db->get_where('mapel', ['id_mapel' => $id])->row_array();
	}

	public function updateDataMapel()
	{
		$data = [
			"nama_mapel" => $this->input->post('nama_mapel', true),
		];
		$this->db->where('id_mapel', $this->input->post('id_mapel'));
		$this->db->update('mapel', $data);
	}
}
