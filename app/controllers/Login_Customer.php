<?php

/**
 *
 */
class Login_Customer extends Controller
{
  // public $data = [];

  function index()
  {
    $data['judul'] = 'Login';
    $this->view('templates/header',$data);
    $this->view('login_customer/index',$data);
    $this->view('templates/footer');
  }

  public function doLogin()
  {
    // var_dump($_POST);
    // echo $_POST['email'];
    if($_POST['email'] != ""){
      $data['customer'] = $this->model('Customer_model')->getDataByEmail($_POST['email']);
      if ($data['customer'] != False){
        if ($data['customer']['password']==$_POST['passwd']){
          $_SESSION["login"] = true;
          $_SESSION["data"] = $data;
          header('Location:'.BASEURL.'/Home');
        } else {
          Message::setMessage('Password yang anda masukkan salah !');
          header('Location:'.BASEURL.'/login_customer');
        }
      }else {
        Message::setMessage('Data customer tidak ditemukan !');
        header('Location:'.BASEURL.'/login_customer');
      }
    }else {
      Message::setMessage('Data email harus diisi !');
      header('Location:'.BASEURL.'/');
    }
  }

  public function doLogout()
  {
    session_start();
    session_unset();
    session_destroy();
    // setcookie("uid","", time()-60);
    header('Location:'.BASEURL.'/login_customer');
    exit;
  }
}
