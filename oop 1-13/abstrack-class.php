<?php 
  
  
abstract class product {
  
  private   $judul, 
            $penulis,
            $penerbit,
            $diskon = 0;
  
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga") {
      $this->judul = "$judul";
      $this->penulis = "$penulis";
      $this->penerbit = "$penerbit";
      $this->harga = "$harga";
  }
  
  public function setjudul( $judul ) {
    if(!is_string($judul)) {
      throw new Exception("judul bukan string");
    }
    $this->judul = $judul;
  }
  
  public function setPenulis($penulis) {
    if(!is_string($penulis)) {
      throw new Exception("judul bukan string");
    }
    $this->penulis = $penulis;
  }
  
  public function getPenulis() {
    return $this->penulis;
  }
  
  public function setPenerbit($penerbit) {
    if(!is_string($penerbit)) {
      throw new Exception("judul bukan string");
    }
    $this->penerbit = $penerbit;
  }
  
  public function getPenerbit() {
    return $this->penerbit;
  }
  
  public function setDiskon($diskon) {
    $this->diskon = $diskon;
  }
  
  public function setHarga($harga) {
    $this->harga = $harga;
  }
  
  public function getHarga() {
    return $this->harga - ( $this->harga * $this->diskon / 100 );
  }
  
  public function getJudul() {
    return $this->judul;
  }
  
  public function getLabel() {  
    return "$this->penulis, $this->penerbit";
  }
  
  abstract public function getInfoProduk(); 
  
  public function getInfo(){
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
    $str = "Komik : ". $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
    $str = "Game : ". $this->getInfo() ." ~ {$this->waktuBermain} Jam";
    return $str;
  }
}

class CetakInfoProduk {
  public $daftarProduk = [];
  
  public function tambahProduk( Product $produk ) {
    $this->daftarProduk[] = $produk; 
  }
  
  public function cetak() {
    $str = "DAFTAR PRODUK : <br>";
    
    foreach($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    
    return $str;
  }
}


$produk1 = new komik("Naruto","Masashi Kishimoto","Shonen Jump",45000, 100);
$produk2 = new game("Uncharted", "Neil Druckman", "Sony Computer", 55000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
