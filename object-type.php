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

$produk1 = new product("Naruto","Masashi Kishimoto","Shonen Jump",45000);
$produk2 = new product("Uncharted", "Neil Druckman", "Sony Computer", 55000);

echo "Komik :" . $produk1->getLabel();
echo "<br>";
echo "game :" . $produk2->getLabel();
echo "<br>";  

$infoProduct1 = new CetakInfoProduk();
echo $infoProduct1->cetak($produk1);