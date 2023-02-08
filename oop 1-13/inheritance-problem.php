<?php 
  
  
class product {
  
  public $judul, 
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuBermain,
        $tipe
        ;
  
  public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga", 
  $jmlHalaman = 0, $waktumain = 0, $tipe = 0) {
      $this->judul = "$judul";
      $this->penulis = "$penulis";
      $this->penerbit = "$penerbit";
      $this->harga = "$harga";
      $this->jmlHalaman = "$jmlHalaman";
      $this->waktuBermain = "$waktumain";
      $this->tipe = $tipe;
  }
  
  public function getLabel() {  
    return "$this->penulis, $this->penerbit";
  }
  
  public function getInfoLengkap() {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if($this->tipe == "Game") {
      $str .= " ~ {$this->waktuBermain} Jam.";
    }
    
    return $str;
  }
}

// class CetakInfoProduk dibuat khusus untuk membuat method / function yang bergungsi mencetak seluruh data dari parameter
// yg diberikan argumen
//function cetak menerima argumen ke parameter $produk yang khusus hanya bisa digunakan oleh variable dari object instansi
//class product dimana parameter tidak bisa dimasukkan data dari argumen yang tidak berhubungan dengan variable dari 
//object instansi class product
class CetakInfoProduk {
  public function cetak(product $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
    return $str;
  }
}

$produk1 = new product("Naruto","Masashi Kishimoto","Shonen Jump",45000, 100, 0, "Komik");
$produk2 = new product("Uncharted", "Neil Druckman", "Sony Computer", 55000,0, 50, "Game");

// komik : Naruto | Masashi kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();