<?php

/**
 *
 */
class Product extends Controller
{

  function index()
  {
    $data['judul'] = 'Product';
    $data['batik'] = $this->model('Product_model')->getDataBatik();
    $this->view('templates/header', $data);
    $this->view('product/index', $data);
    $this->view('templates/footer');
  }
}
