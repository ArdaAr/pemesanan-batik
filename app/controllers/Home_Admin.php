<?php

/**
 *
 */
class Home_Admin extends Controller
{

  public function index(){
    if(!isset($_SESSION["login_admin"])){
      if(isset($_SESSION["login_customer"])) {
        header('Location:'.BASEURL.'/home');
      }else {
        header('Location:'.BASEURL.'/login_admin');
      }
    }
    $data['judul'] = 'Orders';
    $data['pesanan'] = $this->model('Orders_model')->getAllOrders();
    $this->view('templates/header', $data);
    $this->view('home_admin/index',$data);
    $this->view('templates/footer');
  }

  public function reqDeleteOrders($id)
  {
    if ($this->model('Orders_model')->deleteOrderById($id) > 0){
        Message::setMessage('Pesanan Berhasil Dihapus !');
        header('Location:'.BASEURL.'/home_admin');
    }
  }
}
