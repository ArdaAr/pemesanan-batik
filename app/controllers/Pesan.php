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
    $this->view('templates/header',$data);
    $this->view('pesan/index');
    $this->view('templates/footer');
  }
}
