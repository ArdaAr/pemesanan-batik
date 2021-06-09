<?php

class About extends Controller {

  public function index($param1='andy',$param2='dika'){
    $data['param1'] = $param1;
    $data['param2'] = $param2;
    $data['judul'] = 'Halaman About';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $data['judul'] = 'Page View';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
