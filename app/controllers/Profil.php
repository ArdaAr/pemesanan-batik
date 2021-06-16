<?php

/**
 *
 */
class Profil extends Controller
{

  function index()
  {
    if(!isset($_SESSION["login_customer"])){
      header('Location:'.BASEURL.'/home');
    }
    $data['judul'] = 'Profil';
    $_SESSION["data"]['customer'] = $this->model('Customer_model')->getProfilById($_SESSION["id_customer"]);
    $data['pesanan'] = $this->model('Orders_model')->getOrderByCustomer($_SESSION['data']['customer']['id_customer']);
    $this->view('templates/header',$data);
    $this->view('profil/index',$data);
    $this->view('templates/footer');
  }

  public function edit()
  {
    if(!isset($_SESSION["login_customer"])){
      header('Location:'.BASEURL.'/home');
    }
    $data['judul'] = 'Edit Profil';
    $this->view('templates/header',$data);
    $this->view('profil/edit');
    $this->view('templates/footer');
  }

  public function doEditProfil()
  {
    if ($_POST['editnama'] and ($_POST['editemail'] and ($_POST['editpasswd'] and ($_POST['edittelp'] and ($_POST['editalamat']))))){
      if ($this->model('Customer_model')->editData($_POST,$_SESSION['data']['customer']['id_customer']) > 0 ) {
        Message::setMessage('Data Profil Berhasil Diperbarui !');
        header('Location:'.BASEURL.'/profil');
      }
    }else {
      Message::setMessage('Data Profil Tidak Boleh Kosong !');
      header('Location:'.BASEURL.'/profil/edit');
    }
    // echo $_SESSION['data']['customer']['id_customer'];
    // echo $_POST['editnama'];
    // echo $_POST['editemail'];
    // echo $_POST['edittelp'];
    // echo $_POST['editalamat'];
    // echo $_POST['editpasswd'];

  }
}
