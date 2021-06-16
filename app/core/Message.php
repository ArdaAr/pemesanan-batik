<?php

/**
 *
 */
class Message
{
  public static function setMessage($pesan)
  {
    $_SESSION['message'] = $pesan;
  }

  public function showMessage()
  {
    if (isset($_SESSION['message'])){
      echo '<div class="alert alert-danger" role="alert">'.$_SESSION['message'].'</div>';
    }
    unset($_SESSION['message']);
  }

  public function setSweetAlert()
  {
    if (isset($_SESSION['message'])){
      return $_SESSION['message'];
    }
  }
}
