<?php 
  
  require_once 'app/init.php';
  
  $produk1 = new komik("Naruto","Masashi Kishimoto","Shonen Jump",45000, 100);
  $produk2 = new game("Uncharted", "Neil Druckman", "Sony Computer", 55000,50);
  
  $cetakProduk = new CetakInfoProduk();
  $cetakProduk->tambahProduk($produk1);
  $cetakProduk->tambahProduk($produk2);
  echo $cetakProduk->cetak();  
  
  echo "<hr>";
  new Coba();
?>