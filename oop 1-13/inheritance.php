<?php 
  
  
class product {
  
  public $judul, 
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuBermain
        ;
  
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga", 
  $jmlHalaman = 0, $waktuBermain = 0) {
      $this->judul = "$judul";
      $this->penulis = "$penulis";
      $this->penerbit = "$penerbit";
      $this->harga = "$harga";
      $this->jmlHalaman = "$jmlHalaman";
      $this->waktuBermain = "$waktuBermain";
  }
  
  public function getLabel() {  
    return "$this->penulis, $this->penerbit";
  }
  
  public function getInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class komik extends product {
  public function getInfoProduk() {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends product {
  public function getInfoProduk() {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuBermain} Jam";
    return $str;
  }
}

class CetakInfoProduk {
  public function cetak(product $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
    return $str;
  }
}

$produk1 = new komik("Naruto","Masashi Kishimoto","Shonen Jump",45000, 100, 0);
$produk2 = new game("Uncharted", "Neil Druckman", "Sony Computer", 55000,0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();