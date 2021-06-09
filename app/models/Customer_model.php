<?php

/**
 *
 */
class Customer_model
{
  private $table = 'customer';
  // variabel untuk menampung kelas database utama
  private $db;


  public function __construct()
  {
    // ketika dipanggil langsung instasiasi class Database
    $this->db = new Database;
  }

  public function getAllUser()
  {
    $this->db->query('SELECT * FROM '.$this->table);
    return $this->db->resultSet();
  }

  public function getDataByEmail($email)
  {
    $query = ('SELECT * FROM '.$this->table.' WHERE email=:email');
    $this->db->query($query);
    $this->db->bind('email',$email);
    return $this->db->single();
  }

  public function tambahDataCustomer($data)
  {
    $query = "INSERT INTO ".$this->table." VALUES('', :nama, :alamat, :telp, :email, :passwd)";
    $this->db->query($query);
    $this->db->bind('nama',$data['nama']);
    $this->db->bind('alamat',$data['alamat']);
    $this->db->bind('telp',$data['telp']);
    $this->db->bind('email',$data['email']);
    $this->db->bind('passwd',$data['passwd']);
    $this->db->execute();

    return $this->db->countRow();
  }

}
