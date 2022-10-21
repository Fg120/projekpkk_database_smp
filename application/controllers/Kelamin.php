<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelamin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_role(['admin']);
	}

	public function index()
	{
		$data['title'] = "Kelamin";
		$data['kelamin'] = $this->main->get('kelamin', 'id_kelamin');
		Admin_template('kelamin/data', $data);
	}

	public function tambah()
	{
		$id_kelamin = $this->input->POST('id_kelamin');
		$nama_kelamin = $this->input->POST('nama_kelamin');
		$tambah_kelamin = array(
			'id_kelamin' => $id_kelamin,
			'nama_kelamin' => $nama_kelamin,
		);
		$this->Kelamin_model->tambahDataKelamin($tambah_kelamin);
		setMsg('success', 'Kelamin Ditambah');
		redirect('kelamin');
	}

	public function edit($id)
	{
		$data['title'] = "Edit";
		$data['kelamin'] = $this->Kelamin_model->editDatakelamin($id);

		$this->form_validation->set_rules('nama_kelamin', 'nama_kelamin', 'required');

		if ($this->form_validation->run() == false) {
			admin_template('kelamin/edit', $data);
		} else {
			$this->Kelamin_model->updateDataKelamin();
			setMsg('success', 'Kelamin Diedit');
			redirect('kelamin');
		}
	}


	public function delete($id)
	{
		$where = ['id_kelamin' => encode_php_tags($id)];
		$this->main->delete('kelamin', $where);

		setMsg('success', 'Kelamin dihapus.');
		redirect('kelamin');
	}
}
