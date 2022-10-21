<?php
class Pegawai_model  extends CI_Model
{
	public function getDataPegawai()
	{
		$this->db->join('kelamin', 'id_kelamin');
		$this->db->join('agama', 'id_agama');
		$this->db->join('jabatan', 'id_jabatan');
		$this->db->join('status', 'id_status');
		$this->db->order_by('id');
		return $this->db->get('pegawai')->result();
	}
}
