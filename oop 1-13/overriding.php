<?php 
  
  
class product {
  
  public $judul, 
        $penulis,
        $penerbit,
        $harga
        ;
  
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga") {
      $this->judul = "$judul";
      $this->penulis = "$penulis";
      $this->penerbit = "$penerbit";
      $this->harga = "$harga";
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
  public $jmlHalaman;
  
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga", 
  $jmlHalaman = 0) {
    
    parent::__construct($judul,$penulis,$penerbit,$harga);
    
    $this->jmlHalaman = $jmlHalaman;
  }
  
  public function getInfoProduk() {
    $str = "Komik : ". parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends product {
  public $waktuBermain;
  
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga", 
  $waktuBermain = 0) {
    
    parent::__construct($judul,$penulis,$penerbit,$harga);
    
    $this->waktuBermain = $waktuBermain;
  }
  
  public function getInfoProduk() {
    $str = "Game : ". parent::getInfoproduk() ." ~ {$this->waktuBermain} Jam";
    return $str;
  }
}

class CetakInfoProduk {
  public function cetak(product $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
    return $str;
  }
}

$produk1 = new komik("Naruto","Masashi Kishimoto","Shonen Jump",45000, 100);
$produk2 = new game("Uncharted", "Neil Druckman", "Sony Computer", 55000,50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();