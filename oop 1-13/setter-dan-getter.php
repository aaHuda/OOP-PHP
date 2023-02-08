<?php 
  
  
class product {
  
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

echo "<h2>*latihan mencetak data dengan rapih : </h2>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

echo "<h2>*latihan menggunakan visibility : </h2>";
echo "harga dari produk dua : " . $produk2->getHarga();
echo "<br>";
$produk2->setDiskon(50);
echo "harga diskon 50% dari harga produk dua : " . $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Hudayana");
echo $produk1->getPenulis();