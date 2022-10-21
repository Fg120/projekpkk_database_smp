<?php
class Guru_model  extends CI_Model
{
	public function getDataGuru()
	{
		$this->db->join('kelamin', 'id_kelamin');
		$this->db->join('agama', 'id_agama');
		$this->db->join('mapel', 'id_mapel');
		$this->db->join('kelas', 'id_kelas');
		$this->db->join('status', 'id_status');
		$this->db->order_by('id');
		return $this->db->get('guru')->result();
	}
}
