<?php

/**
 *
 */
class Orders_model
{

  private $table = 'orders';
  // variabel untuk menampung kelas database utama
  private $db;


  public function __construct()
  {
    // ketika dipanggil langsung instasiasi class Database
    $this->db = new Database;
  }
}
