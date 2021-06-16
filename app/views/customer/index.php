<div class="container my-5">
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
<div class="container my-5 p-5 bg-light">
  <div class="text-center">
    <h2><span class="badge bg-coklat">Batik Nation's Customers Data</span></h2>
  </div>
  <?php $no = 1 ?>
  <?php foreach ($data['pelanggan'] as $dataCustomer) { ?>
    <div class="row p-5 rounded my-3 bg-customer">
        <div class="col-sm-1">
          <h1><span class="badge bg-coklat"><?= $no; ?></span></h1>
        </div>
        <div class="col-md-2">
          <img src="<?= BASEURL; ?>/img/user.png" width="100" alt="">
        </div>
        <div class="col-md-2">
          <h2 class="fw-bold">Nama</span></h2>
          <hr>
          <h5><?= $dataCustomer['nama']; ?></h5>
        </div>
        <div class="col-md-2">
          <h2>Alamat</h2>
          <hr>
          <h5><?= $dataCustomer['alamat']; ?></h5>
        </div>
        <div class="col-md-2">
          <h2>Telepon</h2>
          <hr>
          <h5 ><?= $dataCustomer['telepon']; ?></h5>
        </div>
        <div class="col-md-2">
          <h2>Email</h2>
          <hr>
          <h5><?= $dataCustomer['email']; ?></h5>
        </div>
    </div>
    <?php $no++; ?>
  <?php } ?>
</div>
