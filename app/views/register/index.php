<nav class="navbar navbar-light bg-white">
  <div class="container">
    <a class="navbar-brand">Batik Nation</a>
    <a class="btn btn-warning" href="<?= BASEURL; ?>/login_customer">Login</a>
  </div>
</nav>
<div class="container">
  <div class="container col-xl-5 py-5">
    <form class="row g-3 p-3 bg-white rounded" action="<?= BASEURL; ?>/register/tambahData" method="post">
      <div class="text-center">
        <h1 class="text-warning">REGISTER</h1>
        <p>untuk dapat memulai pemesanan</p>
      </div>
      <hr>
      <div class="col-12">
        <label for="inputNama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="inputNama" required>
      </div>
      <div class="col-12">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail" required>
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" name="passwd" class="form-control" id="inputPassword4" required>
      </div>
      <div class="col-12">
        <label for="inputTelp" class="form-label">Telepon</label>
        <input type="text" name="telp" class="form-control" id="inputTelp" required>
      </div>
      <div class="col-12">
        <label for="inputAlamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="1234 Main St" required>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-warning">Sign Up</button>
      </div>
    </form>
  </div>
</div>
