<?php
  class koneksi {
    public $koneksi;
    function __construct(){
      $this-> koneksi = mysqli_connect("localhost", "root","","database");
      if($this-> koneksi == false){
        echo "Gagal";
      }
    }
  }

 ?>
