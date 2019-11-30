<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-light bg-light py-4 fixed-top ">
<br>&nbsp;&nbsp;&nbsp; 
<a href="chome" >
  <img src="https://www.matoa-indonesia.com/assets/img/new-logo.png" width="200">
</a>
  <div class="container">
    <a class="navbar-brand" href="#">
   

        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
          <a class="nav-link" href="vproduk">Produk </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="vtokomatoa">Telusuri</a>
        </li>

        <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'cnewsletter' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" 
            aria-expanded="false">
            
            <span>Telusuri</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="vwhatts">What They Said</a>
            <a class="dropdown-item" href="vliputan">Liputan Media</a>
            
        </div>
        </li>






        <li class="nav-item">
          <a class="nav-link" href="vtokomatoa">Toko Matoa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Tentang Matoa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Pusat Bantuan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Ind</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#myModal" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
