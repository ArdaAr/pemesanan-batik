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

  public function getOrderByCustomer($id)
  {
    $query = 'SELECT bt.jenis,c.nama,b.nama as namabahan,o.harga,o.jumlah,date(o.tanggal) as dates FROM orders o join batik bt on o.id_batik=bt.id_batik join customer c on o.id_customer=c.id_customer join bahan b on o.id_bahan=b.id_bahan WHERE o.id_customer = :id';
    $this->db->query($query);
    $this->db->bind('id',$id);
    return $this->db->resultSet();
  }

  public function getAllOrders()
  {
    $query = 'SELECT o.id_order,bt.jenis,c.nama,b.nama as namabahan,o.harga,o.jumlah,date(o.tanggal) as dates FROM orders o join batik bt on o.id_batik=bt.id_batik join customer c on o.id_customer=c.id_customer join bahan b on o.id_bahan=b.id_bahan ORDER BY dates desc';
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function orderBatik()
  {
    // echo $_SESSION['data']['customer']['id_customer'];
    // echo $_POST['jenisbatik'];
    // echo $_POST['hargaBeli'];
    // echo $_POST['jumlah'];
    // echo $_POST['bahan'];
    // echo $_POST['jenisbarang'];
    try {
      $query = "INSERT INTO ".$this->table." (id_batik,id_customer,harga,jumlah,id_bahan,id_barang) VALUES(:idbatik,:idcustomer,:harga,:jumlah,:idbahan,:idbarang)";
      $this->db->query($query);
      $this->db->bind('idbatik',$_POST['jenisbatik']);
      $this->db->bind('idcustomer',$_SESSION['data']['customer']['id_customer']);
      $this->db->bind('harga',$_POST['hargaBeli']);
      $this->db->bind('jumlah',$_POST['jumlah']);
      $this->db->bind('idbahan',$_POST['bahan']);
      $this->db->bind('idbarang',$_POST['jenisbarang']);
      $this->db->execute();
      return $this->db->countRow();
    } catch (PDOException $e) {
      echo 'Message: ' .$e->getMessage();
    }
  }

  public function deleteOrderById($id)
  {
    $query = "DELETE FROM ".$this->table." WHERE id_order = :idorder";
    $this->db->query($query);
    $this->db->bind('idorder',$id);
    $this->db->execute();
    return $this->db->countRow();
  }
}
