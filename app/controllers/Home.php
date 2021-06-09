<?php

/**
 *
 */
 // class controller default
class Home extends Controller{
  // method default ketika tidak menuliskan apapun di url setelah /home/ maka akan dipanggil
  // view(FOLDER/NAMAFILE) -> contoh view(home/index)
  public function index(){
    if(!isset($_SESSION["login"])){
      header('Location:'.BASEURL.'/login_customer');
    }
    $data['judul'] = 'Dashboard';
    $this->view('templates/header', $data);
    $this->view('home/index',$data);
    $this->view('templates/footer');
  }
}
