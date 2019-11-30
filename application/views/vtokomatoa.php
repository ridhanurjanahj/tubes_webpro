
<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("vpartial/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("vpartial/navbar.php") ?>
<br><br><br><br>

<!-- marquee -->
<nav class="navbar" style="background-color: #e67e22 !important; static-top" > <marquee scrollamount="7"> <p style="color: black;" class="mx-auto my-0 nav-link-promo ex1 1"><b>Get Your Free Shipping promo from 21 Nov - 26 Nov</b></p> </marquee></nav>
  
<img src="https://www.matoa-indonesia.com/assets/img/matoashops/banner-matoashop-indonesia.jpg?version=1" width="100%" >

<br>
<br>
<center> <button type="button" class="btn btn-dark">INDONESIA</button></center>
<br>
<br>
<div id="wrapper">



<div class="container">
 
  <?php foreach ($tokomatoa_ind as $product): ?>	
	<div class="row">
	<!-- grid 1 -->
		<div class="col-sm">
				<center><h1 class="card-text"><?php echo $product->kota_toko ?><h1>
				</center>
				<hr/>	
		</div>
	<!-- grid 1 -->

	<!-- grid 2 -->
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="col-sm">
		<h6 class="card-text"><?php echo $product->nama_toko ?></h6>
		<hr/>
		<img src="<?php echo base_url('upload/tokomatoa_ind/'.$product->gambar_toko) ?>" alt="Card image cap" width="100">
					
		</div>
	<!-- grid 2 -->

	<!-- grid 3 -->
		<div class="col-sm">
		<br>
		<br>
		<br>
		<?php echo $product->alamat_toko ?>
						
				</div>
	<!-- grid 3 -->	

	<!-- grid 4 -->
		<div class="col-sm">
		<br>
		<br>
		<br>
		<h6 class="card-text">Phone</h6>			
							<?php echo $product->telp_toko?>
							
		</div>
	<!-- grid 4 -->	

	</div>

	<br>
	<br>
 
	<?php endforeach; ?>
	

  
</div>



</div>
<!-- div wrapper	 -->


<!-- Sticky Footer -->
<br>
<?php $this->load->view("vpartial/footer.php") ?>


<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->





<?php $this->load->view("vpartial/scrolltop.php") ?>
<?php $this->load->view("vpartial/modal.php") ?>
<?php $this->load->view("vpartial/js.php") ?>
    
</body>
</html>