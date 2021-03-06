			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1>Mata Kuliah</h1>
						<!-- <div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
							<div class="breadcrumb-item"><a href="#">Modules</a></div>
							<div class="breadcrumb-item">Mata Kuliah</div>
						</div> -->
					</div>

					<div class="section-body">						
                        <!-- <a class="btn btn-primary mb-4" href="<?= base_url('kaprodi/matakuliah/add') ?>"> <i class="fa fa-plus fa-sm" ></i> Tambah Mata Kuliah</a> -->
						<?= $this->session->flashdata('pesan'); ?>
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4>Daftar Data Mata Kuliah</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped" id="table-1">
												<thead>
													<tr>
														<th>Kode MK</th>
														<th>Nama MK</th>																																																																								
														<th>SKS Teori</th>																																																																								
														<th>SKS Praktek</th>	
														<th>Total SKS</th>																																																																							
														<th>Angkatan</th>																																																																																																																																															
														<th>Jumlah Mahasiswa</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody> 
												<?php foreach($matakuliah as $mk): ?>
													<tr>
														<td><?= $mk->kode_mk; ?></td>
														<td><?= $mk->nama_mk; ?></td>
														<td><?= $mk->sks_teori; ?></td>
														<td><?= $mk->sks_praktek; ?></td>
														<td><?= $mk->total_sks; ?></td>
														<td><?= $mk->angkatan; ?></td>
														<td><?= $this->model_matakuliah->jumlah_mahasiswa($mk->kode_mk); ?></td>
														<td>
															<?= anchor(base_url('kaprodi/matakuliah/info/'. $mk->kode_mk), '<div class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Info" href=""><i class="fas fa-search-plus"></i></div>')?>
															<!-- <?= anchor(base_url('kaprodi/matakuliah/delete/'. $mk->kode_mk), '<div class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></div>')?> -->
														</td>
													</tr>               
												<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
