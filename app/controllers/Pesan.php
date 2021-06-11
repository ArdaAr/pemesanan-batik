<?php

/**
 *
 */
class Pesan extends Controller
{

  public function index()
  {
    if(!isset($_SESSION["login"])){
      header('Location:'.BASEURL.'/login_customer');
    }
    $data['judul'] = 'Order';
    $data['jenis_batik'] = $this->model('Product_model')->getDataBatik();
    $data['bahan'] = $this->model('Bahan_model')->getDataBahan();
    $this->view('templates/header',$data);
    $this->view('pesan/index',$data);
    $this->view('templates/footer');
  }

  public function beliBatik()
  {
    var_dump($_POST);
    // $data['bahan'] = $this->model('Bahan_model')->getDataBahan();
    $this->view('templates/header',$data);
    $this->view('pesan/beliBatik',$_POST);
    $this->view('templates/footer');
  }
}
