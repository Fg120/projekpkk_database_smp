<?= form_open_multipart(); ?>
<?= $this->session->flashdata('msg'); ?>
<div class="text-right mb-3">
	<a href="<?= base_url('kelamin'); ?>" class="btn btn-default">
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
				<h3 class="card-title" id="form-title">Edit Kelamin</h3>

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
						<label for="id_kelamin" class="form-label required">ID Kelamin</label>
						<input required value="<?php echo $kelamin['id_kelamin'] ?>" type="text" name="id_kelamin" id="id_kelamin" class="form-control" placeholder="ID Kelamin">
						<?= form_error('id_kelamin'); ?>
					</div>
					<div class="mb-3">
						<label for="nama_kelamin" class="form-label">Nama Kelamin</label>
						<input required value="<?php echo $kelamin['nama_kelamin'] ?>" name="nama_kelamin" id="nama_kelamin" rows="3" class="form-control" placeholder="Nama Kelamin">
						<?= form_error('nama_kelamin'); ?>
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
<?= form_close(); ?>
