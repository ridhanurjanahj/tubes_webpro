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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/ctokomatoa/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/tokomatoa/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $tokomatoa->id_toko?>" />
							<div class="form-group">
								<label for="kota_toko">Kota*</label>
								<input class="form-control <?php echo form_error('kota_toko') ? 'is-invalid':'' ?>"
								 type="text" name="kota_toko" placeholder="Product Kota tokoa" value="<?php echo $tokomatoa->kota_toko ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kota_toko') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_toko"> Nama Toko*</label>
								<input class="form-control <?php echo form_error('nama_toko') ? 'is-invalid':'' ?>"
								 type="text" name="nama_toko" placeholder="Product nama toko" value="<?php echo $tokomatoa->nama_toko ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_toko') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat_toko"> Alamat Toko*</label>
								<input class="form-control <?php echo form_error('alamat_toko') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_toko" placeholder="Product alamat toko" value="<?php echo $tokomatoa->alamat_toko?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat_toko') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="telp_toko">telp_toko</label>
								<input class="form-control <?php echo form_error('telp_toko') ? 'is-invalid':'' ?>"
								 type="number" name="telp_toko" min="0" placeholder="Product Telp" value="<?php echo $tokomatoa->telp_toko ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telp_toko') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="nama_toko">Photo</label>
								<input class="form-control-file <?php echo form_error('gambar_toko') ? 'is-invalid':'' ?>"
								 type="file" name="gambar_toko" />
								<input type="hidden" name="old_image" value="<?php echo $tokomatoa->gambar_toko ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar_toko') ?>
								</div>
							</div>

					
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>