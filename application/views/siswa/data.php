<?= $this->session->flashdata('msg'); ?>
<div class="row">
	<div class="col-md-12">
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
			<div class="card-header">
				<h5 class="card-title">List <?= $title; ?></h5>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
					<a href="<?= base_url('siswa/tambah'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah Siswa</a>
				</div>
			</div>
			<div class="card-body p-0 table-responsive">
				<table class="table card-table table-vcenter text-nowrap datatable">
					<thead>
						<tr>
							<th>NIS</th>
							<th>Nama</th>
							<th>Tempat Tanggal Lahir</th>
							<th>Alamat</th>
							<th>Kelamin</th>
							<th>Agama</th>
							<th>Kelas</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($siswa as $row) :
						?>
							<tr>
								<td><?= $row->nis; ?></td>
								<td><?= $row->nama; ?></td>
								<td><?= $row->tempat; ?>, <?= $row->tgl_lahir; ?></td>
								<td><?= $row->alamat; ?></td>
								<td><?= $row->nama_kelamin; ?></td>
								<td><?= $row->nama_agama; ?></td>
								<td><?= $row->nama_kelas; ?></td>
								<td><?= $row->nama_status; ?></td>
								<td class="text-right" width="180">
									<div class="btn-group">
										<a href="<?= base_url('siswa/detail/') . $row->id ?>" class="btn btn-default btn-sm btn-edit"><i class="fa fa-info"></i> Detail </a>
										<a href="<?= base_url('siswa/edit/') . $row->id ?>" class="btn btn-default btn-sm btn-edit"><i class="fa fa-edit"></i> Edit </a>
										<a href="<?= base_url('siswa/delete/') . $row->id; ?>" onclick="return confirm('Yakin ingin hapus ?');" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> Delete</a>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
