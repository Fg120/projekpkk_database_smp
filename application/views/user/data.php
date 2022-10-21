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
							<!-- <th>Email</th> -->
							<th>Username</th>
							<th>Role</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ($users) :
							foreach ($users as $row) :
						?>
								<tr>
									<td><?= $row->user_id; ?></td>
									<td><?= $row->nama_agama; ?></td>
									<td class="text-right" width="180">
										<div class="btn-group">
											<a href="<?= base_url('agama/edit/') . $row->user_id ?>" class="btn btn-default btn-sm btn-edit"><i class="fa fa-edit"></i> Edit </a>
											<a href="<?= base_url('agama/delete/') . $row->user_id; ?>" onclick="return confirm('Yakin ingin hapus ?');" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
		<form action="<?php base_url('') ?>agama/tambah" method="POST">
			<div class="card card-outline card-primary shadow-sm">
				<div class="card-header">
					<h3 class="card-title" id="form-title">Agama Baru</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
						</button>
					</div>
					<!-- /.card-tools -->
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label for="id_agama" class="form-label required">ID Agama</label>
						<input required value="" type="number" name="id_agama" id="id_agama" class="form-control" placeholder="ID Agama">
						<?= form_error('id_agama'); ?>
					</div>
					<div class="mb-3">
						<label for="nama_agama" class="form-label">Nama Agama</label>
						<input required value="" type="text" name="nama_agama" id="nama_agama" rows="3" class="form-control" placeholder="Nama Agama">
						<?= form_error('nama_agama'); ?>
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
		$('body').on('click', '.btn-edit', function() {
			let id = $(this).data('id'),
				nama = $(this).data('nama');

			$('#form-title').text('Edit Agama - ID#' + id);
			$('[name=id_agama]').val(id);
			$('#id_agama').val(id).select();
			$('#nama_agama').val(nama);

			document.querySelector('#form-title').scrollIntoView({
				behavior: 'smooth'
			});
		});

		$('body').on('click', '#btn-cancel', function() {
			$('#form-title').text('Agama Baru');
			$('[name=id_agama]').val('');
			$('#nama_agama').val('').select();
		});
	});
</script>
