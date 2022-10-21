<?php
class Siswa_model  extends CI_Model
{
	public function getDataSiswa()
	{
		$this->db->join('kelamin', 'id_kelamin');
		$this->db->join('agama', 'id_agama');
		$this->db->join('kelas', 'id_kelas');
		$this->db->join('status', 'id_status');
		$this->db->order_by('id');
		return $this->db->get('siswa')->result();
	}
}
