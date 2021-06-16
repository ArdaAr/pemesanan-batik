<?php

/**
 *
 */
class Barang_model
{

  private $table = 'jenisbarang';
  // variabel untuk menampung kelas database utama
  private $db;

  public function __construct()
  {
    // ketika dipanggil langsung instasiasi class Database
    $this->db = new Database;
  }

  public function getDataBarang()
  {
    $this->db->query('SELECT * FROM '.$this->table);
    return $this->db->resultSet();
  }

  public function getBarangById($id)
  {
    $this->db->query('SELECT nama,harga_barang FROM '.$this->table.' WHERE id_barang=:id');
    $this->db->bind('id',$id);
    return $this->db->single();
  }
}
