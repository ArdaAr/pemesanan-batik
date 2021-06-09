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
        </ul>
      </div>
    </div>
  </nav>
</header>
<br><br><br>
<div class="container">
  <div class="container col-xxl-8 py-5">
    <form class="row g-3">
    <div class="text-center text-warning">
      <h1>Isi Detail Pesanan</h1>
    </div>
    <div class="col-md-6">
      <label for="inputNama" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="inputNama">
    </div>
    <div class="col-md-6">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Alamat Lengkap</label>
      <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-md-6">
      <label for="inputTelp" class="form-label">No. Telpon</label>
      <input type="text" name="telp" class="form-control" id="inputTelp">
    </div>
    <div class="col-md-6">
      <label for="inputKodePos" class="form-label">Kode Pos</label>
      <input type="text" name="kodepos" class="form-control" id="inputKodePos">
    </div>
    <div class="col-md-4">
      <label for="inputCaraPembuatan" class="form-label">Cara Pembuatan</label>
      <select id="inputCaraPembuatan" name"carabuat" class="form-select">
        <option selected>Cara Pembuatan </option>
        <option value="Cap">Cap</option>
        <option value="Print">Print</option>
        <option value="Tulis">Tulis</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputJenisBatik" class="form-label">Jenis Batik</label>
      <select id="inputJenisBatik" name"jenisbatik" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputZip" class="form-label">Bahan Kain</label>
      <select id="inputJenisBatik" name="jenisbahan" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputJenisBarang" class="form-label">Jenis Barang</label>
      <select id="inputJenisBarang" name"jenisbarang" class="form-select">
        <option selected>Jenis Barang</option>
        <option value="Kemeja Lengan Pendek">Kemeja Lengan Pendek</option>
        <option value="Kemeja Lengan Panjang">Kemeja Lengan Panjang</option>
        <option value="Kain">Kain</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="number" name="jumlah" class="form-control" id="jumlah">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-warning">Submit</button>
    </div>
  </form>
  </div>
</div>
