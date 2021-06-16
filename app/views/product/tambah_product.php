<!-- VIEW INI DIGUNAKAN UNTUK UPDATE DAN TAMBAH DATA -->
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
<h1></h1>
<div class="container p-3">
  <div class="col-xl-10 py-5 rounded">
    <h1><span class="badge bg-coklat"><?= (isset($data['product'])) ? 'Edit Data Product' : 'Tambah Data Product'; ?></span></h1>
    <form class="p-2 bg-light rounded" action="<?= (isset($data['product'])) ? BASEURL.'/product/setEditBatik/'.$data['product']['id_batik'] : BASEURL.'/product/doTambah/' ; ?>" method="post" enctype="multipart/form-data">
      <div class="row g-3 my-2 align-items-center">
        <div class="col-md-2">
          <label for="inputJenisBatik" class="col-form-label">Jenis Batik</label>
        </div>
        <div class="col-auto">
          <input type="text" name="namaproduk" id="inputJenisBatik" value="<?= (isset($data['product'])) ? $data['product']['jenis'] : ''; ?>" class="form-control">
        </div>
      </div>
      <div class="row g-3 my-2 align-items-center">
        <div class="col-md-2">
          <label for="inputDeskripsi" class="col-form-label">Deskripsi</label>
        </div>
        <div class="col-md-5">
          <textarea type="text" id="inputDeskripsi" name="descproduk" value="" class="form-control"><?= (isset($data['product'])) ? $data['product']['deskripsi'] : ''; ?></textarea>
        </div>
        <div class="col-auto">
          <span id="" class="form-text">
            Tarik untuk memperluas area input.
          </span>
        </div>
      </div>
      <div class="row g-3 my-2 align-items-center">
        <div class="col-md-2">
          <label for="inputHarga" class="col-form-label">Harga</label>
        </div>
        <div class="col-auto">
          <input type="number" id="inputHarga" name="hargaproduk" value="<?= (isset($data['product'])) ? $data['product']['harga_jenis'] : ''; ?>" class="form-control">
        </div>
      </div>
      <div class="row g-3 my-2 align-items-center">
        <div class="col-md-2">
          <label for="gambarproduk" class="col-form-label">Gambar</label>
        </div>
        <div class="col-auto">
          <input class="" type="file" id="gambarproduk" name="gambarproduk" value="" required>
        </div>
      </div>
      <div class="row g-3 my-2 align-items-center">
        <div class="col-md-2">
          <button type="submit" class="btn btn-warning">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="ow g-3 my-2 align-items-center my-5">
</div>
<div class="ow g-3 my-2 align-items-center my-5">
</div>
