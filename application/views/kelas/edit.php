<?= form_open_multipart(); ?>
<?= $this->session->flashdata('msg'); ?>
<div class="text-right mb-3">
	<a href="<?= base_url('kelas'); ?>" class="btn btn-default">
		<i class="fa fa-arrow-left"></i> Back
	</a>
	<button type="submit" class="btn btn-primary">
		<i class="fa fa-save"></i> Save
	</button>
</div>
<div class="row">
	<div class="col-md-6 mb-4">
		<div class="card card-outline card-primary shadow-sm">
			<div class="card-header">
				<h3 class="card-title" id="form-title">Edit Kelas</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
				</div>
				<!-- /.card-tools -->
			</div>
			<form action="" method="post">
				<div class="card-body">
					<div class="mb-3">
						<label for="id_kelas" class="form-label required">ID Kelas</label>
						<input required value="<?php echo $kelas['id_kelas'] ?>" type="text" name="id_kelas" id="id_kelas" class="form-control" placeholder="ID Kelas">
						<?= form_error('id_kelas'); ?>
					</div>
					<div class="mb-3">
						<label for="nama_kelas" class="form-label">Nama Kelas</label>
						<input required value="<?php echo $kelas['nama_kelas'] ?>" name="nama_kelas" id="nama_kelas" rows="3" class="form-control" placeholder="Nama Kelas">
						<?= form_error('nama_kelas'); ?>
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
			</form>
		</div>
	</div>
</div>
</script>
<?= form_close(); ?>
