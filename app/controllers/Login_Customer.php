<?php

/**
 *
 */
class Login_Customer extends Controller
{
  // public $data = [];

  function index()
  {
    if (isset($_COOKIE["uid"]) && isset($_COOKIE["unm"])){
      $_SESSION["id_customer"] = $_COOKIE["uid"];
      $data['customer'] = $this->model('Customer_model')->getProfilById($_SESSION["id_customer"]);
      $username = $data['customer']['nama'];
      if ($_COOKIE["unm"] === hash('md5', $username)){
        $_SESSION["login_customer"] = true;
        $_SESSION["data"]['customer'] = $row;
      }
    }

    if(isset($_SESSION["login_customer"])){
      header('Location:'.BASEURL.'/home');
    }
    $data['judul'] = 'Login';
    $this->view('templates/header',$data);
    $this->view('login_customer/index',$data);
    $this->view('templates/footer');
  }

  public function doLogin()
  {
    // var_dump($_POST);
    // echo $_POST['email'];
    // echo $_POST['remember'];
    if($_POST['email'] != ""){
      $data['customer'] = $this->model('Customer_model')->getDataByEmail($_POST['email']);
      if ($data['customer'] != False){
        if ($data['customer']['password']==$_POST['passwd']){
          $_SESSION["login_customer"] = true;
          $_SESSION["id_customer"] = $data['customer']['id_customer'];
          // Message::setMessage('Berhasil');
          if (isset($_POST['remember'])) {
            setcookie('uid', $_SESSION["id_customer"], time()+(86400 * 30), "/");
            $_COOKIE["uid"] = $_SESSION["id_customer"];
            setcookie('unm', hash('md5', $data['customer']['nama']), time()+(86400 * 30), "/");
            $_COOKIE["unm"] = hash('md5', $data['customer']['nama']);
          }
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
      header('Location:'.BASEURL.'/login_customer');
    }
  }

  public function doLogout()
  {
    session_start();
    session_unset();
    session_destroy();
    setcookie("uid","", time()-60,"/");
    // setcookie("uid","", time()-60);
    header('Location:'.BASEURL.'/login_customer');
    exit;
  }
}
