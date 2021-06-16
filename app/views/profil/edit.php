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
<div class="container">
  <div class="container col-xl-5 py-5">
    <form class="row g-3 p-3 bg-white rounded" action="<?= BASEURL; ?>/profil/doEditProfil" method="post">
      <div class="text-center">
        <h1 class="text-warning">Edit Data Profil</h1>
      </div>
      <hr>
      <?php Message::showMessage();?>
      <div class="col-12">
        <label for="inputNama" class="form-label">Nama</label>
        <input type="text" name="editnama" class="form-control" id="inputNama" value="<?= $_SESSION['data']['customer']['nama'] ?>">
      </div>
      <div class="col-12">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" name="editemail" class="form-control" id="inputEmail" value="<?= $_SESSION['data']['customer']['email'] ?>">
      </div>
      <div class="col-12">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" name="editpasswd" class="form-control" id="inputPassword4" value="<?= $_SESSION['data']['customer']['password'] ?>">
      </div>
      <div class="col-12">
        <label for="inputTelp" class="form-label">Telepon</label>
        <input type="text" name="edittelp" class="form-control" id="inputTelp" value="<?= $_SESSION['data']['customer']['telepon'] ?>">
      </div>
      <div class="col-12">
        <label for="inputAlamat" class="form-label">Alamat</label>
        <input type="text" name="editalamat" class="form-control" id="inputAlamat" value="<?= $_SESSION['data']['customer']['alamat'] ?>" placeholder="1234 Main St">
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-warning">Edit</button>
      </div>
    </form>
  </div>
</div>
