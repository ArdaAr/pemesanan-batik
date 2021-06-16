<div class="message" data-message="<?= Message::setSweetAlert(); ?>">
</div>
<?php unset($_SESSION['message']); ?>
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
    <h2><span class="badge bg-warning">Batik Nation's Orders Data</span></h2>
  </div>
  <p class="badge bg-success"><?= count($data['pesanan']); ?> data ditampilkan</p>
  <?php $no = 1 ?>
  <?php foreach ($data['pesanan'] as $dataOrder) { ?>
    <div class="row bg-light p-5 rounded my-3 bg-white">
        <div class="col-md-4">
          <h2 class="fw-bold">Pesanan : <span class="badge bg-coklat fw-normal"><?= $dataOrder['jenis']; ?></span></h2>
          <p>Pemesan : <?= $dataOrder['nama']; ?></p>
        </div>
        <div class="col-md-4">
          <p>Bahan yang dipilih : <?= $dataOrder['namabahan']; ?></p>
          <p>Tanggal Order : <?= $dataOrder['dates']; ?></p>
        </div>
        <div class="col-md-4">
          <p>Jumlah Beli : <?= $dataOrder['jumlah']; ?></p>
          <p class="fw-bold">Total Harga : Rp. <?= $dataOrder['harga']; ?></p>
        </div>
        <div class="col-md-4">
          <!-- <button type="button" class="btn btn-danger hapusData" data-idHapus="<?= $dataOrder['id_order']; ?>">Hapus</button> -->
          <a href="<?= BASEURL; ?>/home_admin/reqDeleteOrders/<?= $dataOrder['id_order']; ?>" class="btn btn-danger hapusData">DELETE</a>
        </div>
        <div class="col-md-6">
          <h1 class="badge bg-warning fw-italic text-coklat">Pesanan dapat segera di proses.</h1>
        </div>
        <div class="col-md-2">
          <img src="<?= BASEURL; ?>/img/barcode.png" width="100" alt="">
        </div>
    </div>
    <?php $no++; ?>
  <?php } ?>
</div>
