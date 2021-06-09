<?php

/**
 *
 */
class Register extends Controller
{

  function index()
  {
    $data['judul'] = 'Registrasi';
    // $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('register/index');
    $this->view('templates/footer');
  }

  public function tambahData()
  {
    // var_dump($_POST);
    if ($this->model('Customer_model')->tambahDataCustomer($_POST) > 0) {
      header('Location:'.BASEURL.'/login_customer');
    };
  }
}
