<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Status";
		$data['status'] = $this->main->get('status', 'id_status');
		Admin_template('status/data', $data);
	}

	public function tambah()
	{
		$id_status = $this->input->POST('id_status');
		$nama_status = $this->input->POST('nama_status');
		$tambah_status = array(
			'id_status' => $id_status,
			'nama_status' => $nama_status,
		);
		$this->Status_model->tambahDataStatus($tambah_status);
		setMsg('success', 'Status Ditambah');
		redirect('status');
	}

	public function edit($id)
	{
		$data['title'] = "Edit";
		$data['status'] = $this->Status_model->editDataStatus($id);

		$this->form_validation->set_rules('nama_status', 'nama_status', 'required');

		if ($this->form_validation->run() == false) {
			Admin_template('status/edit', $data);
		} else {
			$this->Status_model->updateDataStatus();
			setMsg('success', 'Status Diedit');
			redirect('status');
		}
	}


	public function delete($id)
	{
		$where = ['id_status' => encode_php_tags($id)];
		$this->main->delete('status', $where);

		setMsg('success', 'Status dihapus.');
		redirect('status');
	}
}
