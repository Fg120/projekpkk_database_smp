<?= form_open_multipart(); ?>
<div class="text-right mb-3">
	<a href="<?= base_url('guru'); ?>" class="btn btn-default">
		<i class="fa fa-arrow-left"></i> Back
	</a>
	<button type="submit" class="btn btn-primary">
		<i class="fa fa-save"></i> Save
	</button>
</div>
<div class="row">
	<div class="col-md-12 mb-4">
		<div class="card card-outline card-primary shadow-lg">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="nip" class="form-label required">NIP</label>
						<input required value="<?= set_value('nip'); ?>" type="text" name="nip" id="nip" class="form-control" placeholder="NIP">
						<?= form_error('nip'); ?>
					</div>
					<div class="col-md-6 mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input required value="<?= set_value('nama'); ?>" type="text" name="nama" id="nama" rows="3" class="form-control" placeholder="Nama">
						<?= form_error('nama'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="tempat" class="form-label">Tempat</label>
						<input required value="<?= set_value('tempat'); ?>" type="text" name="tempat" id="tempat" rows="3" class="form-control" placeholder="Tempat">
						<?= form_error('tempat'); ?>
					</div>
					<div class="col-md-6 mb-3">
						<label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
						<input required value="<?= set_value('tgl_lahir'); ?>" type="date" name="tgl_lahir" id="tgl_lahir" rows="3" class="form-control" placeholder="Tanggal Lahir">
						<?= form_error('tgl_lahir'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-group">
						<label for="kelamin">Kelamin Guru</label>
						<select class="form-control" id="kelamin" name="id_kelamin" aria-label="Floating label select example">
							<option value="">Kelamin</option>
							<?php foreach ($kelamin as $k) : ?>
								<option value="<?= $k->id_kelamin; ?>"><?= $k->nama_kelamin; ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('id_kelamin'); ?>
					</div>
					<div class="col-md-6 form-group">
						<label for="agama">Agama Guru</label>
						<select class="form-control" id="agama" name="id_agama" aria-label="Floating label select example">
							<option value="">Agama</option>
							<?php foreach ($agama as $a) : ?>
								<option value="<?= $a->id_agama; ?>"><?= $a->nama_agama; ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('id_agama'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 form-group">
						<label for="mapel">Mapel Guru</label>
						<select class="form-control" id="mapel" name="id_mapel" aria-label="Floating label select example">
							<option value="">Mapel</option>
							<?php foreach ($mapel as $m) : ?>
								<option value="<?= $m->id_mapel; ?>"><?= $m->nama_mapel; ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('id_mapel'); ?>
					</div>
					<div class="col-md-6 form-group">
						<label for="kelas">Kelas Guru</label>
						<select class="form-control" id="kelas" name="id_kelas" aria-label="Floating label select example">
							<option value="">Kelas</option>
							<?php foreach ($kelas as $k) : ?>
								<option value="<?= $k->id_kelas; ?>"><?= $k->nama_kelas; ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('id_kelas'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="status">Status Guru</label>
					<select class="form-control" id="status" name="id_status" aria-label="Floating label select example">
						<option value="">Status</option>
						<?php foreach ($status as $s) : ?>
							<option value="<?= $s->id_status; ?>"><?= $s->nama_status; ?></option>
						<?php endforeach; ?>
					</select>
					<?= form_error('id_kelas'); ?>
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
		</div>
	</div>
</div>
<?= form_close(); ?>
