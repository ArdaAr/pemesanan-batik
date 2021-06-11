<?php

/**
 *
 */
class Product_model
{

  private $table = 'batik';
  // variabel untuk menampung kelas database utama
  private $db;


  public function __construct()
  {
    // ketika dipanggil langsung instasiasi class Database
    $this->db = new Database;
  }

  public function getDataBatik()
  {
    $query = 'SELECT * FROM '.$this->table;
    $this->db->query($query);
    return $this->db->resultSet();
  }
}
