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

  public function getBatikById($id)
  {
    $this->db->query('SELECT * FROM '.$this->table.' WHERE id_batik=:id');
    $this->db->bind('id',$id);
    return $this->db->single();
  }

  public function tambahProduct($data)
  {
    $query = "INSERT INTO ".$this->table." VALUES('', :jenis, :desc, :gambar, :harga)";
    $this->db->query($query);
    $this->db->bind('jenis',$data['namaproduk']);
    $this->db->bind('desc',$data['descproduk']);
    $this->db->bind('gambar',$data['gambarproduk']);
    $this->db->bind('harga',$data['hargaproduk']);
    $this->db->execute();
    return $this->db->countRow();
  }

  public function editProduct($data,$id)
  {
    $query = "UPDATE ".$this->table." SET jenis=:nama, deskripsi=:desc, harga_jenis=:harga, gambar=:gambar WHERE id_batik=:id";
    $this->db->query($query);
    $this->db->bind('nama',$data['namaproduk']);
    $this->db->bind('desc',$data['descproduk']);
    $this->db->bind('gambar',$data['gambarproduk']);
    $this->db->bind('harga',$data['hargaproduk']);
    $this->db->bind('id',$id);
    $this->db->execute();
    return $this->db->countRow();
  }
}
