<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Users";
		$data['users'] = $this->main->get('users', 'user_id');
		Admin_template('user/data', $data);
	}

	public function tambah()
	{
		$id_agama = $this->input->POST('id_agama');
		$nama_agama = $this->input->POST('nama_agama');
		$tambah_agama = array(
			'id_agama' => $id_agama,
			'nama_agama' => $nama_agama,
		);
		$this->Agama_model->tambahDataAgama($tambah_agama);
		setMsg('success', 'Agama Ditambah');
		redirect('agama');
	}

	public function edit($id)
	{
		$data['title'] = "Edit";
		$data['agama'] = $this->Agama_model->editDataAgama($id);

		$this->form_validation->set_rules('nama_agama', 'nama_agama', 'required');

		if ($this->form_validation->run() == false) {
			Admin_template('agama/edit', $data);
		} else {
			$this->Agama_model->updateDataAgama();
			setMsg('success', 'Agama Diedit');
			redirect('agama');
		}
	}


	public function delete($id)
	{
		$where = ['id_agama' => encode_php_tags($id)];
		$this->main->delete('agama', $where);

		setMsg('success', 'Agama dihapus.');
		redirect('agama');
	}
}
