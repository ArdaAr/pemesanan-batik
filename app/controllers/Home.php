<?php

/**
 *
 */
 // class controller default
class Home extends Controller{
  // method default ketika tidak menuliskan apapun di url setelah /home/ maka akan dipanggil
  // view(FOLDER/NAMAFILE) -> contoh view(home/index)
  public function index(){
    // echo $_COOKIE['unm'];
    // echo $_COOKIE['uid'];
    if(!isset($_SESSION["login_customer"])){
      if(isset($_SESSION["login_admin"])){
        header('Location:'.BASEURL.'/home_admin');
      }else {
        header('Location:'.BASEURL.'/login_customer');
      }
    }
    $data['judul'] = 'Home';
    $this->view('templates/header', $data);
    $this->view('home/index',$data);
    $this->view('templates/footer');
  }
}
