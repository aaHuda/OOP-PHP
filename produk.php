<?php 
  // jualan produk
  // komik
  // game
  class product {
    
    //properti pada class / data-data default pada class
    public $judul = "judul"
          ,$penulis = "penulis"
          ,$penerbit = "penerbit"
          ,$harga = "0K"
          ;
          
    public function __construct($judul,$penulis,$penerbit,$harga) {
      echo "";
    }
    
    // method pada class berupa function / sifat-sifat pada class
    public function getLabel() {  
      return "$this->penulis, $this->penerbit";
    }
  }
  
  // $produk1 = new Produk();
  // $produk1 ->judul = "Naruto";
  // var_dump($produk1);
  
  
  // $produk2 = new Produk();
  // $produk2 ->judul = "Uncharted";
  // $produk2 ->PropertiTambahan = "hahaha";
  // var_dump($produk2);
  
  //object produk 3 / data-data produk 3 
  $produk3 = new product();
  $produk3->judul = "Naruto";
  $produk3->penulis = "Masashi Kishimoto";
  $produk3->penerbit = "Shonen Jump";
  $produk3->harga = 45000;
  
  // object produk 4 / data-data produk 4
  $produk4 = new product();
  $produk4->judul = "Uncharted";
  $produk4->penulis = "Neil Druckman";
  $produk4->penerbit = "Sony Computer";
  $produk4->harga = 55000;
  
  // menampilkan data produk 3 dan 4 berdasarkan sifat atau function yang ada di class produk
  echo "Komik :" . $produk3->getLabel();
  echo "<br>";
  echo "game :" . $produk4->getLabel();