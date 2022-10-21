<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Guru";
		$data['guru'] = $this->Guru_model->getDataGuru();
		Admin_template('guru/data', $data);
		// $data['guru'] = $this->main->get('guru', 'id');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Guru";
		$data['kelamin'] = $this->main->get('kelamin');
		$data['agama'] = $this->main->get('agama');
		$data['mapel'] = $this->main->get('mapel');
		$data['kelas'] = $this->main->get('kelas');
		$data['status'] = $this->main->get('status');

		$this->validation();

		if ($this->form_validation->run() == false) {
			admin_template('guru/tambah', $data);
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
		$data['mapel'] = $this->main->get('mapel');
		$data['kelas'] = $this->main->get('kelas');
		$data['status'] = $this->main->get('status');
		$data['guru'] = $this->main->get_where('guru', $where);
		if (!$data['guru']) redirect('guru/data');

		$this->validation();

		if ($this->form_validation->run() == false) {
			admin_template('guru/edit', $data);
		} else {
			$this->update($where);
		}
	}

	private function update($where)
	{
		$input = $this->input->post(null, true);
		$input['nip'] = $this->input->post('nip', false);

		setMsg('success', 'Guru updated.');
		$this->main->update('guru', $input, $where);
		redirect('guru');
	}

	private function validation()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('id_kelamin', 'Kelamin', 'required');
		$this->form_validation->set_rules('id_agama', 'Agama', 'required');
		$this->form_validation->set_rules('id_mapel', 'Mapel', 'required');
		$this->form_validation->set_rules('id_kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('id_status', 'Status', 'required');
	}

	private function save()
	{
		$input = $this->input->post(null, true);
		$input['nip'] = $this->input->post('nip');

		$this->main->insert('guru', $input);
		setMsg('success', 'Guru ditambah.');
		redirect('guru');
	}

	public function delete($id)
	{
		$where = ['id' => encode_php_tags($id)];
		$this->main->delete('guru', $where);

		setMsg('success', 'Guru dihapus.');
		redirect('guru');
	}
}
