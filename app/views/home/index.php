<div class="message" data-message="<?= Message::setSweetAlert(); ?>">
</div>
<?php unset($_SESSION['message']); ?>
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= BASEURL; ?>/home">Batik Nation</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/product">Product</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu active" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="<?= BASEURL; ?>/Profil">My Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?= BASEURL; ?>/Login_Customer/doLogout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<br><br>
<main>
  <!-- <div class="container"> -->

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= BASEURL; ?>/img/batik31.png" class="w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Batik Nation.</h1>
            <h5>Ingin pesan batik tak perlu repot datang ke toko atau butik, anda dirumah <br>
                saja, batik pesanan anda akan sampai ke rumah anda.<br>
                Ayo pesan sekarang!
                .</h5>
            <p><a class="btn btn-lg btn-warning text-coklat" href="<?= BASEURL; ?>/pesan">Pesan Sekarang</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= BASEURL; ?>/img/batik21.png" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption">
            <h1>Pembatik Asli Daerah Tuban</h1>
            <h5>Semua batik di kerjakan oleh pembatik asli daerah tuban yang telah berpengalaman membatik selama bertahun-tahun.</h5>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= BASEURL; ?>/img/batik.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Produk Original.</h1>
            <h5>Produk Batik Nation asli dikerjakan dengan teknik membatik tradisional dan tidak ada manipulasi.</h5>
            <p><a class="btn btn-lg btn-warning text-coklat" href="<?= BASEURL; ?>/product">Lihat Produk</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- </div> -->
  <br><br><br><br>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row justify-content-center">
      <div class="col-lg-4 text-center">
        <img src="<?= BASEURL; ?>/img/info1.png" class="" alt="">
        <h2 class="text-coklat py-2 fw-bold">Mengumpulkan Informasi</h2>
        <p>Kami mengumpulkan informasi detail tentang batik pesanan anda.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <img src="<?= BASEURL; ?>/img/process.png" class="" alt="">
        <h2 class="text-coklat py-2 fw-bold">Proses Pembuatan</h2>
        <p>Kami memproses pesanan anda dengan waktu yang telah disepakati.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <img src="<?= BASEURL; ?>/img/kirim1.png" class="" alt="">
        <h2 class="text-coklat py-2 fw-bold">Pengiriman</h2>
        <p>Kami mengirimkan pesanan anda ke alamat yang telah diberikan.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    <div class="b-example-divider"></div>


    <!-- <div class="container col-xxl-8 py-5"> -->
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="<?= BASEURL; ?>/img/delivery.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3 text-coklat">Pengiriman Batik Instan</h1>
          <p class="lead">Batik Nation menggunakan jasa pengiriman dari ekspedisi yang bekerja sama dengan toko, dengan ini toko bisa menjangkau pelanggan lebih luas lagi, jangan khawatir... keamanan barang tetap terjaga dari tangan penjual sampai ke tangan pembeli.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a type="button" class="btn btn-warning btn-lg px-4 me-md-2" href="<?= BASEURL; ?>/product">Pesan Sekarang</a>
          </div>
        </div>
      </div>
  <!-- </div> -->

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <div class="container">

    <div class="row g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">

      </div>
    </div>

  </div>


  <!-- FOOTER -->
  <footer class="text-center text-white py-3" style="background-color: #f1f1f1;">
  <h1 class="text-coklat">Hubungi Kami <span><i class="fa fa-paper-plane text-coklat fs-1" aria-hidden="true"></i></span></h1>
  <p class="text-dark">Hubungi kami jika anda ingin berkonsultasi atau komplain tentang pesanan<br>yang akan dibalas langsung oleh owner Batik Nation, dan ikuti juga kami di seluruh sosial media kami.</p>
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://Facebook.com"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://twitter.com"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://gmail.com"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://instagram.com"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://linkedin.com"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="https://github.com/ardaar"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fa fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <!-- Copyright -->
</footer>
