<?php

/**
 *
 */
class Profil extends Controller
{

  function index()
  {
    if(!isset($_SESSION["login"])){
      header('Location:'.BASEURL.'/login_customer');
    }
    $data['judul'] = 'Profil';
    $this->view('templates/header',$data);
    $this->view('profil/index');
    $this->view('templates/footer');
  }

  public function edit()
  {
    if(!isset($_SESSION["login"])){
      header('Location:'.BASEURL.'/login_customer');
    }
    $data['judul'] = 'Edit Profil';
    $this->view('templates/header',$data);
    $this->view('profil/edit');
    $this->view('templates/footer');
  }
}
