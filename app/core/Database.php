<?php

/**
 *
 */
class Database
{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $db_name = DB_NAME;
  // $dbh -> database handler (koneksi), $stmt -> statement untuk query
  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;

    // option berisi array parameter dari konfigurasi database
    $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  // method untuk query apapun, menyiapkan query
  public function query($query)
  {
    $this->stmt = $this->dbh->prepare($query);
  }

  // untuk handle data pada query where,insert,update dll
  public function bind($param, $value, $type = null)
  {
    if( is_null($type) ){
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type =   PDO::PARAM_BOOL;
          break;
        case is_null($value):
        $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value, $type);
  }

  // fungsi eksekusi query
  public function execute()
  {
    $this->stmt->execute();
  }

  // data return banyak
  public function resultSet()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // data return hanya 1
  public function single(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }

  // menghitung perubahan row
  public function countRow()
  {
    return $this->stmt->rowCount();
  }
}
