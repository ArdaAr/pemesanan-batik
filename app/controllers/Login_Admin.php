<?php

/**
 *
 */
class Login_Admin extends Controller
{

  function index()
  {
    if(isset($_SESSION["login_admin"])){
      header('Location:'.BASEURL.'/home');
    }
    $data['judul'] = 'Login Admin';
    $this->view('templates/header',$data);
    $this->view('login_admin/index',$data);
    $this->view('templates/footer');
  }

  public function doLogin($value='')
  {
    if($_POST['username'] != ""){
      $data['admin'] = $this->model('Admin_model')->getDataByUsername($_POST['username']);
      if ($data['admin'] != False){
        if ($data['admin']['password']==$_POST['passwd']){
          $_SESSION["login_admin"] = true;
          $_SESSION["id_admin"] = $data['admin']['id_admin'];
          header('Location:'.BASEURL.'/Home_Admin');
        } else {
          Message::setMessage('Password yang anda masukkan salah !');
          header('Location:'.BASEURL.'/login_admin');
        }
      }else {
        Message::setMessage('Data customer tidak ditemukan !');
        header('Location:'.BASEURL.'/login_admin');
      }
    }else {
      Message::setMessage('Data email harus diisi !');
      header('Location:'.BASEURL.'/login_admin');
    }
  }

  public function logout()
  {
    session_start();
    session_unset();
    session_destroy();
    // setcookie("uid","", time()-60);
    header('Location:'.BASEURL.'/login_admin');
    exit;
  }

}
