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
<br><br><br>
<div class="container">
  <div class="container bg-coklattransparan text-coklat rounded col-xxl-8 py-5">
    <form class="row g-3">
    <div class="text-center text-coklat">
      <h1 class="fw-bold">Isi Detail Pesanan</h1>
    </div>
    <div class="text-center">
      <p>Pesanan adalah <span class="badge bg-warning text-dark">Pre-Order</span> sehingga akan dikirimkan setelah pembuatan selesai</p>
    </div>
    <?php $profil = $_SESSION['data']['customer']; ?>
    <div class="col-md-6">
      <label for="inputNama" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="inputNama" value="<?= $profil['nama'] ?>">
    </div>
    <div class="col-md-6">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail" value="<?= $profil['email'] ?>">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Alamat Lengkap</label>
      <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="Semanding, Tuban Jawa Timur" value="<?= $profil['alamat'] ?>">
    </div>
    <div class="col-md-6">
      <label for="inputTelp" class="form-label">No. Telpon</label>
      <input type="text" name="telp" class="form-control" id="inputTelp" value="<?= $profil['telepon']; ?>">
    </div>
    <div class="col-md-6">
      <label for="inputKodePos" class="form-label">Kode Pos</label>
      <input type="text" name="kodepos" class="form-control" id="inputKodePos">
    </div>
    <div class="col-md-4">
      <label for="inputCaraPembuatan" class="form-label">Cara Pembuatan</label>
      <select id="inputCaraPembuatan" name"carabuat" class="form-select">
        <option value="null">Cara Pembuatan </option>
        <option value="Cap">Cap</option>
        <option value="Print">Print</option>
        <option value="Tulis">Tulis</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputJenisBatik" class="form-label">Jenis Batik</label>
      <select id="inputJenisBatik" name"jenisbatik" class="form-select">
        <option value="null">Pilih Jenis Batik</option>
        <?php foreach ($data['jenis_batik'] as $jenis) { ?>
          <option value="<?= $jenis['id_batik']; ?>"><?= $jenis['jenis']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputZip" class="form-label">Bahan Kain</label>
      <select id="inputBahan" name="jenisbahan" class="form-select">
        <option value="null">Pilih Bahan Kain</option>
        <?php foreach ($data['bahan'] as $bahan) { ?>
          <option value="<?= $bahan['id_bahan']; ?>"><?= $bahan['nama']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputJenisBarang" class="form-label">Jenis Barang</label>
      <select id="inputJenisBarang" name"jenisbarang" class="form-select">
        <option value="null">Jenis Barang</option>
        <?php foreach ($data['barang'] as $barang) { ?>
          <option value="<?= $barang['id_barang']; ?>"><?= $barang['nama']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputJumlah" class="form-label">Jumlah</label>
      <input type="number" name="jumlah" class="form-control" id="inputJumlah">
    </div>
    <!-- <div class="col-12">
      <button type="submit" class="btn btn-warning">Submit</button>
    </div> -->
    <!-- Button trigger modal -->
    <div class="col-12">
      <button type="button" class="btn btn-warning goCheckout" data-bs-toggle="modal" data-bs-target="#verifikasiModal">
        Checkout
      </button>
    </div>
  </form>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="verifikasiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Checkout Verification</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/pesan/beliBatik" method="post">
          <!-- row divider -->
          <div class="mb-3-row text-center">
            <p class="badge bg-warning text-dark">MOHON PERIKSA KEMBALI PESANAN ANDA</p>
          </div>
          <!-- row divider -->
          <div class="mb-3 row">
            <label for="nama_pembeli" class="col-sm-4 col-form-label">Nama :</label>
            <div class="col-sm-8">
              <input type="text" readonly name="nama" class="form-control-plaintext" id="nama_pembeli" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="telp_pembeli" class="col-sm-4 col-form-label">Telepon :</label>
            <div class="col-sm-8">
              <input type="text" readonly name="telp" class="form-control-plaintext" id="telp_pembeli" value="">
            </div>
          </div>
          <!-- row divider -->
          <div class="mb-3 row">
            <label for="kode_pos" class="col-sm-4 col-form-label">KodePos :</label>
            <div class="col-sm-8">
              <input type="text" readonly name="kodepos" class="form-control-plaintext" id="kode_pos" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Email :</label>
            <div class="col-sm-8">
              <input type="text" readonly name="email" class="form-control-plaintext" id="staticEmail" value="">
            </div>
          </div>
          <!-- row divider -->
          <div class="mb-3 row">
            <label for="alamat_pembeli" class="col-sm-4 col-form-label">Alamat :</label>
            <div class="col-sm-8">
              <textarea type="textarea" readonly name="alamat" class="form-control-plaintext" id="alamat_pembeli" value=""></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="bahan_kain" class="col-sm-4 col-form-label">Bahan :</label>
            <div class="col-sm-8">
              <input type="text" readonly name="" class="form-control-plaintext" id="bahan_kain" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jenis_barang" class="col-sm-4 col-form-label">Jenis Barang :</label>
            <div class="col-sm-8">
              <input type="text" readonly name="" class="form-control-plaintext" id="jenis_barang" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jenis_batik" class="col-sm-4 col-form-label">Jenis Batik :</label>
            <div class="col-sm-8">
              <input type="text" readonly name="" class="form-control-plaintext" id="jenis_batik" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="cara_buat" class="col-sm-4 col-form-label">Cara Pembuatan :</label>
            <div class="col-sm-8">
              <input type="text" readonly name="carabuat" class="form-control-plaintext" id="cara_buat" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jumlah_beli" class="col-sm-4 col-form-label">Jumlah :</label>
            <div class="col-sm-8">
              <input type="textarea" readonly name="jumlah" class="form-control-plaintext" id="jumlah_beli" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="perkiraanHarga" class="col-sm-4 col-form-label">Perkiraan Harga :</label>
            <div class="col-sm-8">
              <input type="textarea" readonly name="hargaBeli" class="form-control-plaintext" id="perkiraanHarga" value="">
            </div>
          </div>
          <input type="hidden" id="idpesanbarang" name="jenisbarang" value="">
          <input type="hidden" id="idpesanbatik" name="jenisbatik" value="">
          <input type="hidden" id="idpesanbahan" name="bahan" value="">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-warning submitpesan">Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="my-5">

</div>
