<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Jabatan";
		$data['jabatan'] = $this->main->get('jabatan', 'id_jabatan');
		Admin_template('jabatan/data', $data);
	}

	public function tambah()
	{
		$id_jabatan = $this->input->POST('id_jabatan');
		$nama_jabatan = $this->input->POST('nama_jabatan');
		$tambah_jabatan = array(
			'id_jabatan' => $id_jabatan,
			'nama_jabatan' => $nama_jabatan,
		);
		$this->Jabatan_model->tambahDataJabatan($tambah_jabatan);
		setMsg('success', 'Jabatan Ditambah');
		redirect('jabatan');
	}

	public function edit($id)
	{
		$data['title'] = "Edit";
		$data['jabatan'] = $this->Jabatan_model->editDataJabatan($id);

		$this->form_validation->set_rules('nama_jabatan', 'nama_jabatan', 'required');

		if ($this->form_validation->run() == false) {
			Admin_template('jabatan/edit', $data);
		} else {
			$this->Jabatan_model->updateDataJabatan();
			setMsg('success', 'Jabatan Diedit');
			redirect('jabatan');
		}
	}


	public function delete($id)
	{
		$where = ['id_jabatan' => encode_php_tags($id)];
		$this->main->delete('jabatan', $where);

		setMsg('success', 'Jabatan dihapus.');
		redirect('jabatan');
	}
}
