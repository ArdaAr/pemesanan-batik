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
<!-- content -->
<div class="container col-xxl-8 py-5 bg-light">
    <div class="p-2 mb-4 bg-light rounded-3 jumbotron-profil">
      <div class="container-fluid text-center py-5">
        <div class="row">
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4 text-white">
            <img class="rounded-circle shadow" src="<?= BASEURL; ?>/img/profile.png" width="140" height="140" alt="">
            <h2 class="bg-kuning my-2 rounded-pill p-1"><?= $_SESSION['data']['customer']['nama']; ?></h2>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">

          </div>
        </div>
      </div>
    </div>
    <div class="text-center text-kuning">
      <h1>Data Profil</h1>
    </div>
    <hr>
    <div class="mb-3 row">
      <?php foreach ($_SESSION['data']['customer'] as $key => $value) : ?>
        <?php if ($key == 'id_customer') : ?>
          <?php continue; ?>
        <?php endif ?>
        <label for="staticEmail" class="col-sm-2 col-form-label"><?= ucwords($key); ?></label>
        <div class="col-sm-10">
          <input type="<?php echo ($key == 'password') ? "password" : 'text'; ?>" readonly class="form-control-plaintext bg-white mb-2 rounded px-3" id="staticEmail" value="<?= $value; ?>">
        </div>
    <?php endforeach ?>
    <p class="mt-3"><a class="btn btn-lg btn-warning" href="<?= BASEURL; ?>/profil/edit">Edit Profile</a></p>
    </div>
    <hr>
    <div class="text-center text-kuning">
      <h1>Riwayat Pemesanan</h1>
    </div>
    <div class="row g-3">
      <?php if (count($data['pesanan']) != 0) { ?>
        <?php foreach ($data['pesanan'] as $pesanan) {?>
          <div class="col-md-6">
            <div class="card text-start">
              <div class="card-body">
                <h4>Batik Pesanan : <span class="badge bg-coklat"><?= $pesanan['jenis']; ?></span></h4>
                <p>Pemesan : <?= $pesanan['nama']; ?></p>
                <p>Jumlah : <?= $pesanan['jumlah']; ?></p>
                <p>Total harga : <?= $pesanan['harga']; ?></p>
                <p>Tanggal Pesanan : <?= $pesanan['dates']; ?></p>
              </div>
            </div>
          </div>
          <br>
        <?php } ?>
      <?php }else {?>
        <div class="mb-3 text-center text-kuning">
          <img src="<?= BASEURL; ?>/img/empty.png" class="rounded mx-auto d-block emptypic" width="400px" alt="">
          <p class="fs-4">Belum ada pesanan :(</p>
        </div>
      <?php } ?>
    </div>
</div>
