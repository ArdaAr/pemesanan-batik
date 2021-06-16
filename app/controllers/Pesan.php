<?php

/**
 *
 */
class Pesan extends Controller
{

  public function index()
  {
    if(!isset($_SESSION["login_customer"])){
      header('Location:'.BASEURL.'/home');
    }
    $data['judul'] = 'Order';
    $_SESSION["data"]['customer'] = $this->model('Customer_model')->getProfilById($_SESSION["id_customer"]);
    $data['jenis_batik'] = $this->model('Product_model')->getDataBatik();
    $data['bahan'] = $this->model('Bahan_model')->getDataBahan();
    $data['barang'] = $this->model('Barang_model')->getDataBarang();
    $this->view('templates/header',$data);
    $this->view('pesan/index',$data);
    $this->view('templates/footer');
  }

  public function beliBatik()
  {
    if ($this->model('Orders_model')->orderBatik() > 0){
      Message::setMessage('Pembelian Berhasil !');
      header('Location:'.BASEURL.'/Home');
    };
  }

  public function getDataForCart()
  {
    $data['ajax']['bahan'] = $this->model('Bahan_model')->getBahanById($_POST['bahan']);
    $data['ajax']['batik'] = $this->model('Product_model')->getBatikById($_POST['batik']);
    $data['ajax']['barang'] = $this->model('Barang_model')->getBarangById($_POST['barang']);

    echo json_encode($data['ajax']);
  }
}
