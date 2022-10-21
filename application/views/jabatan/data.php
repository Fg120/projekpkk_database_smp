<?= $this->session->flashdata('msg'); ?>
<div class="row">
	<div class="col-md-9">
		<div class="card card-outline card-primary shadow-sm">
			<!-- <div class="card-header">
				<h1 class="card-title">Data Kelas</h1>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
				</div>
				/.card-tools
			</div> -->
			<div class="card-body p-0 table-responsive">
				<table class="table card-table table-vcenter text-nowrap datatable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ($jabatan) :
							foreach ($jabatan as $row) :
						?>
								<tr>
									<td><?= $row->id_jabatan; ?></td>
									<td><?= $row->nama_jabatan; ?></td>
									<td class="text-right" width="180">
										<div class="btn-group">
											<a href="<?= base_url('jabatan/edit/') . $row->id_jabatan ?>" class="btn btn-default btn-sm btn-edit"><i class="fa fa-edit"></i> Edit </a>
											<a href="<?= base_url('jabatan/delete/') . $row->id_jabatan; ?>" onclick="return confirm('Yakin ingin hapus ?');" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> Delete</a>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php else : ?>
							<tr>
								<td class="text-center" colspan="4">No Data</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-3 mb-4">
		<form action="<?php base_url('') ?>jabatan/tambah" method="POST">
			<div class="card card-outline card-primary shadow-sm">
				<div class="card-header">
					<h3 class="card-title" id="form-title">Jabatan Baru</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
						</button>
					</div>
					<!-- /.card-tools -->
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label for="id_jabatan" class="form-label required">ID Jabatan</label>
						<input required value="" type="number" name="id_jabatan" id="id_jabatan" class="form-control" placeholder="ID Jabatan">
						<?= form_error('id_jabatan'); ?>
					</div>
					<div class="mb-3">
						<label for="nama_jabatan" class="form-label">Nama Jabatan</label>
						<input required value="" type="text" name="nama_jabatan" id="nama_jabatan" rows="3" class="form-control" placeholder="Nama Jabatan">
						<?= form_error('nama_jabatan'); ?>
					</div>
				</div>
				<div class="card-footer text-right">
					<button type="reset" id="btn-cancel" class="btn btn-secondary">Clear</button>
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

<script type="text/javascript">
	$(document).ready(function() {
		$('body').on('click', '#btn-cancel', function() {
			$('#form-title').text('Jabatan Baru');
			$('[name=id_jabatan]').val('');
			$('#nama_jabatan').val('sasas').select();
		});
	});
</script>
