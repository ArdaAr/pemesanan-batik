<?php

/**
 *
 */
class Mahasiswa extends Controller
{

  function index()
  {
    $data['judul'] = 'Data Mahasiswa';
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header',$data);
    $this->view('mahasiswa/index',$data);
    $this->view('templates/footer');
  }
}
