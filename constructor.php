
<?php 
  // jualan produk
  // komik
  // game
  class product {
    
    //properti pada class / data-data default pada class
    public $judul, 
          $penulis,
          $penerbit,
          $harga 
          ;
          
    // membuat function method construct dengan parameter $judul, $penulis, ,$penerbit, $harga dan data defaultnya 
    //jika object tidak menyertakan argumen 
    // serta mengambil data dari argumen object ke parameter dan di proses / diberi sifat yaitu
    //variable dari public contohnya $this->judul,$this->penulis,dst. akan di timpa atau dimasukkan data 
    //berdasarkan parameter yang sudah di beri data dari argumen object product 3,4,5
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga") {
        $this->judul = "$judul";
        $this->penulis = "$penulis";
        $this->penerbit = "$penerbit";
        $this->harga = "$harga";
      
    }
    
    // method pada class berupa function / sifat-sifat pada class yang menyatakan data-data yang ingin dimasukkan ke
    // dalam objek/produk
    // data berdasarkan data public yg sudah di proses di function __construct
    public function getLabel() {  
      return "$this->penulis, $this->penerbit";
    }
  }
  
  //object produk 3 / data-data produk 3 yang dimasukkan ke dalam argumen yang nantinya ditangkap parameter function
  //__construct
  $produk3 = new product("Naruto","Masashi Kishimoto","Shonen Jump",45000);
  
    //object produk 4 / data-data produk 4 yang dimasukkan ke dalam argumen yang nantinya ditangkap parameter function
  //__construct
  $produk4 = new product("Uncharted", "Neil Druckman", "Sony Computer", 55000);
  
  // object produk 5 yang tidak di beri argumen akan diisi dengan data default yang sudah ada di function __construct
  $produk5 = new product();
  
  // menampilkan data produk 3, 4 dan 5 berdasarkan sifat atau function getLabel yang ada di class produk
  echo "Komik :" . $produk3->getLabel();
  echo "<br>";
  echo "game :" . $produk4->getLabel();
  echo "<br>";
  echo "default : " . $produk5->getLabel();