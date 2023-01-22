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
        echo  "judul :" . $this->judul = "$judul" . "<br>";
        echo  "penulis :" . $this->penulis = "$penulis" . "<br>";
        echo  "penerbit :" . $this->penerbit = "$penerbit" . "<br>";
        echo  "harga :" . $this->harga = "$harga" . "<br>";
      
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
  $produk3 = new product("Naruto","Masashi Kishimoto","Shonen Jump",45000);
  
  // menampilkan data produk 3 dan 4 berdasarkan sifat atau function yang ada di class produk
  $produk4 = new product("One piece", "Oda sheishiro", "shonen jump", 55000);