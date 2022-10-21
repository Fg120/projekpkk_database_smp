<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Mapel";
		$data['mapel'] = $this->main->get('mapel', 'id_mapel');
		Admin_template('mapel/data', $data);
	}

	public function tambah()
	{
		$id_mapel = $this->input->POST('id_mapel');
		$nama_mapel = $this->input->POST('nama_mapel');
		$tambah_mapel = array(
			'id_mapel' => $id_mapel,
			'nama_mapel' => $nama_mapel,
		);
		$this->Mapel_model->tambahDataMapel($tambah_mapel);
		setMsg('success', 'Mapel Ditambah');
		redirect('mapel');
	}

	public function edit($id)
	{
		$data['title'] = "Edit";
		$data['mapel'] = $this->Mapel_model->editDataMapel($id);

		$this->form_validation->set_rules('nama_mapel', 'nama_mapel', 'required');

		if ($this->form_validation->run() == false) {
			admin_template('mapel/edit', $data);
		} else {
			$this->Mapel_model->updateDataMapel();
			setMsg('success', 'Mapel Diedit');
			redirect('mapel');
		}
	}


	public function delete($id)
	{
		$where = ['id_mapel' => encode_php_tags($id)];
		$this->main->delete('mapel', $where);

		setMsg('success', 'Mapel dihapus.');
		redirect('mapel');
	}
}
