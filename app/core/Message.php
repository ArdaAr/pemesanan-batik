<?php

/**
 *
 */
class Message
{
  public static function setMessage($pesan)
  {
    $_SESSION['message'] = [
      'pesan' => $pesan
    ];
  }

  public function showMessage()
  {
    if (isset($_SESSION['message'])){
      echo '<div class="alert alert-danger" role="alert">'.$_SESSION['message']['pesan'].'</div>';
    }
    unset($_SESSION['message']);
  }
}
