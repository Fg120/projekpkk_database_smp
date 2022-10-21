<?= form_open_multipart(); ?>
<?= $this->session->flashdata('msg'); ?>
<div class="text-right mb-3">
	<a href="<?= base_url('pegawai'); ?>" class="btn btn-default">
		<i class="fa fa-arrow-left"></i> Back
	</a>
	<button type="submit" class="btn btn-primary">
		<i class="fa fa-save"></i> Save
	</button>
</div>
<div class="row">
	<div class="col-md-12 d-flex justify-content-center mb-4">
		<div class="card card-outline card-primary shadow-lg">
			<div class="card-header">
				<h3 class="card-title" id="form-title">Edit Pegawai</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
				</div>
				<!-- /.card-tools -->
			</div>
			<form action="" method="post">
				<div class="card-body">
					<div class="row d-flex">
						<div class="col-md-6 mb-3">
							<label for="nip" class="form-label required">NIP</label>
							<input required value="<?= set_value('nip', $pegawai->nip); ?>" type="text" name="nip" id="nip" class="form-control" placeholder="NIP">
							<?= form_error('nip'); ?>
						</div>
						<div class="col-md-6 mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input required value="<?= set_value('nama', $pegawai->nama); ?>" type="text" name="nama" id="nama" rows="3" class="form-control" placeholder="Nama">
							<?= form_error('nama'); ?>
						</div>
					</div>
					<div class="row d-flex">
						<div class="col-md-4 mb-3">
							<label for="tempat" class="form-label">Tempat</label>
							<input required value="<?= set_value('tempat', $pegawai->tempat); ?>" type="text" name="tempat" id="tempat" rows="3" class="form-control" placeholder="Tempat">
							<?= form_error('tempat'); ?>
						</div>
						<div class="col-md-4 mb-3">
							<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
							<input required value="<?= set_value('tgl_lahir', $pegawai->tgl_lahir); ?>" type="date" name="tgl_lahir" id="tgl_lahir" rows="3" class="form-control" placeholder="Tanggal Lahir">
							<?= form_error('tgl_lahir'); ?>
						</div>
						<div class="col-md-4 mb-3">
							<label for="pendidikan" class="form-label">Pendidikan</label>
							<input required value="<?= set_value('pendidikan', $pegawai->pendidikan); ?>" type="text" name="pendidikan" id="pendidikan" rows="3" class="form-control" placeholder="Pendidikan">
							<?= form_error('pendidikan'); ?>
						</div>
					</div>
					<div class="mb-3">
						<label for="alamat" class="form-label">Alamat</label>
						<input required value="<?= set_value('alamat', $pegawai->alamat); ?>" type="text" name="alamat" id="alamat" rows="3" class="form-control" placeholder="Alamat">
						<?= form_error('alamat'); ?>
					</div>
					<div class="row d-flex">
						<div class="col-md-6 form-group">
							<label for="kelamin">Kelamin</label>
							<select class="form-control" id="kelamin" name="id_kelamin" aria-label="Floating label select example">
								<option value="">Kelamin</option>
								<?php foreach ($kelamin as $k) : ?>
									<option value="<?= $k->id_kelamin; ?>" <?= check($k->id_kelamin, $pegawai->id_kelamin, "selected"); ?>><?= $k->nama_kelamin; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('id_kelamin'); ?>
						</div>
						<div class="col-md-6 form-group">
							<label for="agama">Agama</label>
							<select class="form-control" id="agama" name="id_agama" aria-label="Floating label select example">
								<option value="">Agama</option>
								<?php foreach ($agama as $a) : ?>
									<option value="<?= $a->id_agama; ?>" <?= check($a->id_agama, $pegawai->id_agama, "selected"); ?>><?= $a->nama_agama; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('id_agama'); ?>
						</div>
					</div>
					<div class="row d-flex">
						<div class="col-md-6 form-group">
							<label for="jabatan">Jabatan</label>
							<select class="form-control" id="jabatan" name="id_jabatan" aria-label="Floating label select example">
								<option value="">Jabatan</option>
								<?php foreach ($jabatan as $m) : ?>
									<option value="<?= $m->id_jabatan; ?>" <?= check($m->id_jabatan, $pegawai->id_jabatan, "selected"); ?>><?= $m->nama_jabatan; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('id_jabatan'); ?>
						</div>
						<div class="col-md-6 form-group">
							<label for="status">Status</label>
							<select class="form-control" id="status" name="id_status" aria-label="Floating label select example">
								<option value="">Status</option>
								<?php foreach ($status as $s) : ?>
									<option value="<?= $s->id_status; ?>" <?= check($s->id_status, $pegawai->id_status, "selected"); ?>><?= $s->nama_status; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('id_kelas'); ?>
						</div>
					</div>
					<div class="card-footer text-right">
						<button type="submit" class="btn btn-primary">
							<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none" />
								<path d="M5 12l5 5l10 -10" />
							</svg>
							Save
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</script>
<?= form_close(); ?>
