<?php

/**
 *
 */
class Product extends Controller
{

  function index()
  {
    if (!$_SESSION['login_customer']) {
      header('Location:'.BASEURL.'/home');
    }
    $data['judul'] = 'Product';
    $data['batik'] = $this->model('Product_model')->getDataBatik();
    $this->view('templates/header', $data);
    $this->view('product/index', $data);
    $this->view('templates/footer');
  }

  public function Product_admin()
  {
    if (!$_SESSION['login_admin']) {
      header('Location:'.BASEURL.'/home_admin');
    }
    $data['judul'] = 'Product';
    $data['batik'] = $this->model('Product_model')->getDataBatik();
    $this->view('templates/header', $data);
    $this->view('product/product_admin', $data);
    $this->view('templates/footer');
  }

  public function tambah_product()
  {
    if (!$_SESSION['login_admin']) {
      header('Location:'.BASEURL.'/home_admin');
    }
    $data['judul'] = 'Tambah Product';
    // $data['batik'] = $this->model('Product_model')->getDataBatik();
    $this->view('templates/header', $data);
    $this->view('product/tambah_product', $data);
    $this->view('templates/footer');
  }

  public function doTambah()
  {
    $namaFile = $_FILES['gambarproduk']['name'];
    $namaTmp = $_FILES['gambarproduk']['tmp_name'];
    $target_dir = '../public/img/';
    $uploaded = move_uploaded_file($namaTmp, $target_dir.$namaFile);
    $_POST['gambarproduk'] = $namaFile;
    var_dump($_POST);
    if ($this->model('Product_model')->tambahProduct($_POST) > 0) {
      Message::setMessage('Product Berhasil Ditambahkan !');
      header('Location:'.BASEURL.'/product/product_admin');
    } else {
      Message::setMessage('Product Gagal Ditambahkan !');
    }
  }

  public function reqEditProduct($idProduct)
  {
    if (!$_SESSION['login_admin']) {
      header('Location:'.BASEURL.'/home_admin');
    }
    $data['product'] = $this->model('Product_model')->getBatikById($idProduct);
    $data['judul'] = 'Edit Product';
    $data['edit'] = True;
    // $data['batik'] = $this->model('Product_model')->getDataBatik();
    $this->view('templates/header', $data);
    $this->view('product/tambah_product', $data);
    $this->view('templates/footer');
  }

  public function setEditBatik($id)
  {
    $namaFile = $_FILES['gambarproduk']['name'];
    $namaTmp = $_FILES['gambarproduk']['tmp_name'];
    $target_dir = '../public/img/';
    $uploaded = move_uploaded_file($namaTmp, $target_dir.$namaFile);
    $_POST['gambarproduk'] = $namaFile;
    if ($this->model('Product_model')->editProduct($_POST,$id) > 0) {
      Message::setMessage('Product Berhasil Diperbarui !');
      header('Location:'.BASEURL.'/product/product_admin');
    }
    Message::setMessage('Product Berhasil Diperbarui !');
  }
}
