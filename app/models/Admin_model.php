<?php

/**
 *
 */
class Admin_model
{

  private $table = 'admin';
  // variabel untuk menampung kelas database utama
  private $db;


  public function __construct()
  {
    // ketika dipanggil langsung instasiasi class Database
    $this->db = new Database;
  }

  public function getDataByUsername($username)
  {
    $this->db->query('SELECT * FROM '.$this->table.' WHERE username=:username');
    $this->db->bind('username',$username);
    return $this->db->single();
  }
}
