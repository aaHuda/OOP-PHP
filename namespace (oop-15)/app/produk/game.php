<?php 
  class Game extends product implements InfoProduk {
    public $waktuBermain;
    
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga", 
    $waktuBermain = 0) {
      
      parent::__construct($judul,$penulis,$penerbit,$harga);
      
      $this->waktuBermain = $waktuBermain;
    }
    
    public function getInfo(){
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
    }
    
    public function getInfoProduk() {
      $str = "Game : ". $this->getInfo() ." ~ {$this->waktuBermain} Jam";
      return $str;
    }
  }
