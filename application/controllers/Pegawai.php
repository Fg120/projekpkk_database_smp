<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Pegawai";
		$data['pegawai'] = $this->Pegawai_model->getDataPegawai();
		Admin_template('pegawai/data', $data);
	}

	public function tambah()
	{
		$data['title'] = "Tambah Pegawai";
		$data['kelamin'] = $this->main->get('kelamin');
		$data['agama'] = $this->main->get('agama');
		$data['jabatan'] = $this->main->get('jabatan');
		$data['status'] = $this->main->get('status');

		$this->validation();

		if ($this->form_validation->run() == false) {
			admin_template('pegawai/tambah', $data);
		} else {
			$this->save();
		}
	}

	public function edit($id)
	{
		$where = ['id' => encode_php_tags($id)];

		$data['title'] = 'Edit';
		$data['kelamin'] = $this->main->get('kelamin');
		$data['agama'] = $this->main->get('agama');
		$data['jabatan'] = $this->main->get('jabatan');
		$data['status'] = $this->main->get('status');
		$data['pegawai'] = $this->main->get_where('pegawai', $where);
		if (!$data['pegawai']) redirect('pegawai/data');

		$this->validation();

		if ($this->form_validation->run() == false) {
			admin_template('pegawai/edit', $data);
		} else {
			$this->update($where);
		}
	}

	private function update($where)
	{
		$input = $this->input->post(null, true);
		$input['nip'] = $this->input->post('nip', false);

		setMsg('success', 'pegawai updated.');
		$this->main->update('pegawai', $input, $where);
		redirect('pegawai');
	}

	private function validation()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('id_kelamin', 'Kelamin', 'required');
		$this->form_validation->set_rules('id_agama', 'Agama', 'required');
		$this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('id_status', 'Status', 'required');
	}

	private function save()
	{
		$input = $this->input->post(null, true);
		$input['nip'] = $this->input->post('nip');

		$this->main->insert('pegawai', $input);
		setMsg('success', 'Pegawai ditambah.');
		redirect('pegawai');
	}

	public function delete($id)
	{
		$where = ['id' => encode_php_tags($id)];
		$this->main->delete('pegawai', $where);

		setMsg('success', 'Pegawai dihapus.');
		redirect('pegawai');
	}
}
