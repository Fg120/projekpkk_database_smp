<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Siswa";
		$data['siswa'] = $this->Siswa_model->getDataSiswa();
		Admin_template('siswa/data', $data);
	}

	public function tambah()
	{
		$data['title'] = "Tambah Siswa";
		$data['kelamin'] = $this->main->get('kelamin');
		$data['agama'] = $this->main->get('agama');
		$data['kelas'] = $this->main->get('kelas');
		$data['status'] = $this->main->get('status');

		$this->validation();

		if ($this->form_validation->run() == false) {
			admin_template('siswa/tambah', $data);
		} else {
			$this->save();
		}
	}

	public function detail($id)
	{
		$where = ['id' => encode_php_tags($id)];

		$data['title'] = 'Detail';
		$data['kelamin'] = $this->main->get('kelamin');
		$data['agama'] = $this->main->get('agama');
		$data['kelas'] = $this->main->get('kelas');
		$data['status'] = $this->main->get('status');
		$data['siswa'] = $this->main->get_where('siswa', $where);
		if (!$data['siswa']) redirect('siswa/data');

		$this->validation();

		if ($this->form_validation->run() == false) {
			admin_template('siswa/detail', $data);
		} else {
			$this->update($where);
		}
	}

	public function edit($id)
	{
		$where = ['id' => encode_php_tags($id)];

		$data['title'] = 'Edit';
		$data['kelamin'] = $this->main->get('kelamin');
		$data['agama'] = $this->main->get('agama');
		$data['kelas'] = $this->main->get('kelas');
		$data['status'] = $this->main->get('status');
		$data['siswa'] = $this->main->get_where('siswa', $where);
		if (!$data['siswa']) redirect('siswa/data');

		$this->validation();

		if ($this->form_validation->run() == false) {
			admin_template('siswa/edit', $data);
		} else {
			$this->update($where);
		}
	}

	private function update($where)
	{
		$input = $this->input->post(null, true);
		$input['nis'] = $this->input->post('nis', false);

		setMsg('success', 'Siswa updated.');
		$this->main->update('siswa', $input, $where);
		redirect('siswa');
	}

	private function validation()
	{
		$this->form_validation->set_rules('nis', 'NIS', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelamin', 'Kelamin', 'required');
		$this->form_validation->set_rules('id_agama', 'Agama', 'required');
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('id_status', 'Status', 'required');
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('nama_ibu', 'Nama', 'required');
	}

	private function save()
	{
		$input = $this->input->post(null, true);
		$input['nis'] = $this->input->post('nis');

		$this->main->insert('siswa', $input);
		setMsg('success', 'Siswa ditambah.');
		redirect('siswa');
	}

	public function delete($id)
	{
		$where = ['id' => encode_php_tags($id)];
		$this->main->delete('siswa', $where);

		setMsg('success', 'Siswa dihapus.');
		redirect('siswa');
	}
}
