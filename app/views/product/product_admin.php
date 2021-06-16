<div class="message" data-message="<?= Message::setSweetAlert(); ?>">
</div>
<?php unset($_SESSION['message']); ?>
<div class="container mb-5">
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= BASEURL; ?>/home_admin">Batik Nation</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home_admin">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/product/product_admin">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/Customer">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active btn btn-warning" aria-current="page" href="<?= BASEURL; ?>/login_admin/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="container my-5 p-5">
  <div class="text-center">
    <h2><span class="badge bg-warning">Batik Nation's Products</span></h2>
  </div>
  <a href="<?= BASEURL; ?>/product/tambah_product" class="btn btn-success">Add Product</a>
  <?php foreach ($data['batik'] as $batik) { ?>
    <div class="row bg-light p-3 rounded my-3">
      <div class="col-md-4 text-center">
        <img src="<?= BASEURL; ?>/img/<?= $batik['gambar']; ?>" width="300" alt="<?= $batik['gambar']; ?>">
      </div>
      <div class="col">
        <h1><?= $batik['jenis']; ?></h1>
        <p class="lead"><?= $batik['deskripsi'] ?></p>
        <h3>harga pembuatan : <span class="badge bg-coklat">Rp. <?= $batik['harga_jenis'] ?></span></h3>
        <a class="btn btn-lg btn-warning" href="<?= BASEURL; ?>/product/reqEditProduct/<?= $batik['id_batik']; ?>" role="button">Edit Product</a>
      </div>
    </div>
  <?php } ?>
</div>
