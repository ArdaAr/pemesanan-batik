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
    if ($_POST['nama'] and ($_POST['email'] and ($_POST['passwd'] and ($_POST['telp'] and ($_POST['alamat']))))) {
      // echo 'ada nama';
      if ($this->model('Customer_model')->tambahDataCustomer($_POST) > 0) {
        Message::setMessage('Register Berhasil');
        header('Location:'.BASEURL.'/register');
      }
    }else {
      Message::setMessage('Data Tidak Boleh Kosong !');
      header('Location:'.BASEURL.'/register');
    }
  }
}
