<?php

/**
 *
 */
class Bahan_model
{

  private $table = 'bahan';
  // variabel untuk menampung kelas database utama
  private $db;


  public function __construct()
  {
    // ketika dipanggil langsung instasiasi class Database
    $this->db = new Database;
  }

  public function getDataBahan()
  {
    $query = 'SELECT * FROM '.$this->table;
    $this->db->query($query);
    return $this->db->resultSet();
  }
}
