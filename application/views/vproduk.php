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
  
<img src="https://www.matoa-indonesia.com/assets/img/collection/banner/jpg/banner-promo-rambo-4.jpg" width="100%" >


<br>
<br>
<center> <button type="button" class="btn btn-dark">JAM TANGAN</button></center>
<br>

<div id="wrapper">
<!-- card -->
<div id="content-wrapper">

<div class="container">
	
	<div class="row">
	
	<?php foreach ($products as $product): ?>	
	<div class="col-xl-4 mb-3">
	<div class="card" style="width: 18rem;">
		<img class="card-img-top" src="<?php echo base_url('upload/product/'.$product->image) ?>" alt="Card image cap">
			<div class="card-body">

				<center><b class="card-text"><?php echo $product->name ?></b></center>
				<center><strike> <?php echo $product->price ?> </strike>&nbsp;<b>30%OFF</b></center>
				<center><b><?php echo substr($product->description, 0, 120) ?></b></center>
				<hr >
			
				
			</div>
	
	</div>		
	</div>

		
	<?php endforeach; ?>
	</div>
	</div>
<!-- /card -->
	
	


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