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
<div class="container py-5">
    <div class="p-5 mb-4 bg-light rounded-3 jumbotron">
      <div class="container-fluid py-5">
        <br>
        <h1 class="display-5 fw-bold text-coklat">Jenis Batik Produksi Batik Nation</h1>
        <p class="col-md-8 fs-4 text-coklat">Berikut adalah daftar batik yang di produksi di Batik Nation.</p>
        <a class="btn btn-warning btn-lg" href="<?= BASEURL; ?>/pesan" type="button">Pesan Sekarang</a>
      </div>
    </div>

    <hr class="featurette-divider">
    <?php foreach ($data['batik'] as $batik) { ?>
      <div class="row flex-lg align-items-center g-5 py-5">
        <div class="col-md-7">
          <h2 class="featurette-heading text-coklat"><span class="text-muted"> Batik </span><?= $batik['jenis']; ?></h2>
          <p class="lead"><?= $batik['deskripsi']; ?>.</p>
        </div>
        <div class="col-md-5">
          <img src="<?= BASEURL; ?>/img/<?= $batik['gambar']; ?>" class="shadow" width="500" alt="megamendung.jpg">
        </div>
      </div>

      <hr class="featurette-divider">
    <?php } ?>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2021
    </footer>
  </div>
