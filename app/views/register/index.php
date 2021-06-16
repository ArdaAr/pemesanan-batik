<div class="message" data-message="<?= Message::setSweetAlert(); ?>">
</div>
<?php unset($_SESSION['message']); ?>
<nav class="navbar navbar-light bg-white">
  <div class="container">
    <a class="navbar-brand text-coklat fw-bold">Batik Nation</a>
    <a class="btn btn-warning" href="<?= BASEURL; ?>/login_customer">Login</a>
  </div>
</nav>
<div class="container">
  <div class="container col-xl-5 py-5">
    <form class="row g-3 p-3 bg-white rounded" action="<?= BASEURL; ?>/register/tambahData" method="post">
      <div class="text-center">
        <h1 class="text-coklat fw-bold">REGISTER</h1>
        <p>untuk dapat memulai pemesanan</p>
      </div>
      <hr>
      <?php Message::showMessage();?>
      <div class="col-12">
        <label for="inputNama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="inputNama">
      </div>
      <div class="col-12">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" name="passwd" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputTelp" class="form-label">Telepon</label>
        <input type="text" name="telp" class="form-control" id="inputTelp">
      </div>
      <div class="col-12">
        <label for="inputAlamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="1234 Main St">
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-warning">Sign Up</button>
      </div>
    </form>
  </div>
</div>
