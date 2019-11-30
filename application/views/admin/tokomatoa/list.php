<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/ctokomatoa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kota</th>
										<th>Nama</th>
										<th>alamat</th>
										<th>gambar</th>
										<th>telp</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tokomatoa_ind as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->kota_toko ?>		
										</td>
										<td>
											<?php echo $product->nama_toko ?>
										</td>

										<td>
											<?php echo $product->alamat_toko ?>
										</td>

										<td>
											<img src="<?php echo base_url('upload/tokomatoa_ind/'.$product->gambar_toko) ?>" width="64" />
										</td>
										
										<td>
											<?php echo $product->telp_toko?>
										</td>
										
										<td>
							
											<a href="<?php echo site_url('admin/ctokomatoa/edit/'.$product->id_toko) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a> <!-- conttroller tokomatoa -->
											<a onclick="deleteConfirm('<?php echo site_url('admin/ctokomatoa/delete/'.$product->id_toko) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
																						<!-- conttroller tokomatoa -->
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href',url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>