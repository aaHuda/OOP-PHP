<?php 
  
  abstract class product {
  
    protected $judul, 
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
    
    abstract function getInfo();
  
}
