<?php

/**
 *
 */
class Product extends Controller
{

  function index()
  {
    $data['judul'] = 'Product';
    // $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('product/index');
    $this->view('templates/footer');
  }
}
