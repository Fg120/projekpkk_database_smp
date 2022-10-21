<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Kelas";
		$data['kelas'] = $this->main->get('kelas', 'id_kelas');
		Admin_template('kelas/data', $data);
	}

	public function tambah()
	{
		$id_kelas = $this->input->POST('id_kelas');
		$nama_kelas = $this->input->POST('nama_kelas');
		$tambahKelas = array(
			'id_kelas' => $id_kelas,
			'nama_kelas' => $nama_kelas,
		);
		$this->Kelas_model->tambahDataKelas($tambahKelas);
		setMsg('success', 'Kelas Ditambah');
		redirect('kelas');
	}

	public function edit($id)
	{
		$data['title'] = "Edit";
		$data['kelas'] = $this->Kelas_model->editDataKelas($id);

		$this->form_validation->set_rules('nama_kelas', 'nama_kelas', 'required');

		if ($this->form_validation->run() == false) {
			admin_template('kelas/edit', $data);
		} else {
			$this->Kelas_model->updateDataKelas();
			setMsg('success', 'Kelas Diedit');
			redirect('kelas');
		}
	}


	public function delete($id)
	{
		$where = ['id_kelas' => encode_php_tags($id)];
		$this->main->delete('kelas', $where);

		setMsg('success', 'Kelas deleted.');
		redirect('kelas');
	}
}
