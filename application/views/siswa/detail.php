<?= $this->session->flashdata('msg'); ?>
<div class="text-right mb-3">
	<a href="<?= base_url('siswa'); ?>" class="btn btn-default">
		<i class="fa fa-arrow-left"></i> Back
	</a>
	<!-- <button type="submit" class="btn btn-primary">
		<i class="fa fa-save"></i> Save
	</button> -->
</div>
<div class="row">
	<div class="col-md-12 mb-4">
		<div class="card card-outline card-primary shadow-lg">
			<div class="card-header">
				<h3 class="card-title" id="form-title">Detail Siswa</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
				</div>
				<!-- /.card-tools -->
			</div>
			<form action="" method="post">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="nis" class="form-label">NIS</label>
							<input disabled required value="<?= set_value('nis', $siswa->nis); ?>" type="text" name="nis" id="nis" class="form-control" placeholder="NIS">
							<?= form_error('nis'); ?>
						</div>
						<div class="col-md-6 mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input disabled required value="<?= set_value('nama', $siswa->nama); ?>" type="text" name="nama" id="nama" rows="3" class="form-control" placeholder="Nama">
							<?= form_error('nama'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="tempat" class="form-label">Tempat</label>
							<input disabled required value="<?= set_value('tempat', $siswa->tempat); ?>" type="text" name="tempat" id="tempat" rows="3" class="form-control" placeholder="Tempat">
							<?= form_error('tempat'); ?>
						</div>
						<div class="col-md-6 mb-3">
							<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
							<input disabled required value="<?= set_value('tgl_lahir', $siswa->tgl_lahir); ?>" type="date" name="tgl_lahir" id="tgl_lahir" rows="3" class="form-control" placeholder="Tanggal Lahir">
							<?= form_error('tgl_lahir'); ?>
						</div>
					</div>
					<div class="mb-3">
						<label for="alamat" class="form-label">Alamat</label>
						<input disabled required value="<?= set_value('alamat', $siswa->alamat); ?>" type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
						<?= form_error('alamat'); ?>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="nama_ayah" class="form-label">Nama Ayah</label>
							<input disabled required value="<?= set_value('nama_ayah', $siswa->nama_ayah); ?>" type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="Nama Ayah">
							<?= form_error('nama_ayah'); ?>
						</div>
						<div class="col-md-6 mb-3">
							<label for="nama_ibu" class="form-label">Nama Ibu</label>
							<input disabled required value="<?= set_value('nama_ibu', $siswa->nama_ibu); ?>" type="text" name="nama_ibu" id="nama_ibu" rows="3" class="form-control" placeholder="Nama Ibu">
							<?= form_error('nama_ibu'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
							<input disabled required value="<?= set_value('pekerjaan_ayah', $siswa->pekerjaan_ayah); ?>" type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah">
							<?= form_error('pekerjaan_ayah'); ?>
						</div>
						<div class="col-md-6 mb-3">
							<label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
							<input disabled required value="<?= set_value('pekerjaan_ibu', $siswa->pekerjaan_ibu); ?>" type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" rows="3" class="form-control" placeholder="Pekerjaan Ibu">
							<?= form_error('pekerjaan_ibu'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="kelamin">Kelamin</label>
							<select disabled class="form-control" id="kelamin" name="id_kelamin" aria-label="Floating label select example">
								<option value="">Kelamin</option>
								<?php foreach ($kelamin as $k) : ?>
									<option value="<?= $k->id_kelamin; ?>" <?= check($k->id_kelamin, $siswa->id_kelamin, "selected"); ?>><?= $k->nama_kelamin; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('id_kelamin'); ?>
						</div>
						<div class="col-md-6 form-group">
							<label for="agama">Agama</label>
							<select disabled class="form-control" id="agama" name="id_agama" aria-label="Floating label select example">
								<option value="">Agama</option>
								<?php foreach ($agama as $a) : ?>
									<option value="<?= $a->id_agama; ?>" <?= check($a->id_agama, $siswa->id_agama, "selected"); ?>><?= $a->nama_agama; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('id_agama'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="kelas">Kelas</label>
							<select disabled class="form-control" id="kelas" name="id_kelas" aria-label="Floating label select example">
								<option value="">Kelas</option>
								<?php foreach ($kelas as $k) : ?>
									<option value="<?= $k->id_kelas; ?>" <?= check($k->id_kelas, $siswa->id_kelas, "selected"); ?>><?= $k->nama_kelas; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('id_kelas'); ?>
						</div>
						<div class="col-md-6 form-group">
							<label for="status">Status</label>
							<select disabled class="form-control" id="status" name="id_status" aria-label="Floating label select example">
								<option value="">Status</option>
								<?php foreach ($status as $s) : ?>
									<option value="<?= $s->id_status; ?>" <?= check($s->id_status, $siswa->id_status, "selected"); ?>><?= $s->nama_status; ?></option>
								<?php endforeach; ?>
							</select>
							<?= form_error('id_kelas'); ?>
						</div>
					</div>
					<div class="card-footer text-right">
						<a href="<?= base_url('siswa'); ?>" class="btn btn-primary">
							<i class="fa fa-arrow-left"></i> Back
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</script>
