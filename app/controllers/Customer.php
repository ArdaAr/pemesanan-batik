<?php

/**
 *
 */
class Customer extends Controller
{

  function index()
  {
    if(!isset($_SESSION["login_admin"])){
      header('Location:'.BASEURL.'/home_admin');
    }
    $data['judul'] = 'Customers';
    $data['pelanggan'] = $this->model('Customer_model')->getAllCustomer();
    $this->view('templates/header',$data);
    $this->view('customer/index',$data);
    $this->view('templates/footer');
  }

}
