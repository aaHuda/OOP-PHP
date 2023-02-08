<?php 
  // contoh pengunaan method static 
  class ContohStatic {
    public static $angka = 1;
    
    public static function halo() { 
      return "Halo" . self::$angka++ . " kali ";
    }
  }
  
  echo ContohStatic::$angka;
  echo "<br>";
  echo ContohStatic::halo();
  echo "<br>";
  echo ContohStatic::halo();
  echo "<hr>";
  echo "<hr>";
  
  //perbedaan antar mengugunakan oop biasa dan method static
  
  //oop biasa :
  // nilai static tidak akan tetap saat object di-instansi berulang kali
  class Contoh {
    public $angka = 1;
    
    public function halo() {
      return "halo " . $this->angka++ . " kali";
    }
  }
  
  $obj = new Contoh;
  echo $obj->halo();
  echo "<br>";
  echo $obj->halo();
  echo "<br>";
  echo $obj->halo();
  echo "<hr>";
  
  $obj2 = new Contoh;
  echo $obj2->halo();
  echo "<br>";
  echo $obj2->halo();
  echo "<br>";
  echo $obj2->halo();
  echo "<hr>";
  echo "<hr>";
  
  //static :
  // nilai static akan selalu tetap meskipun object di-instansi berulang kali
  class Contoh2 {
    public static $angka = 1;
    
    public function halo() {
      return "Halo " . self::$angka++ . " kali";
    }
  }
  
  $obj = new Contoh2;
  echo $obj->halo();
  echo "<br>";
  echo $obj->halo();
  echo "<br>";
  echo $obj->halo();
  echo "<hr>";
  
  $obj2 = new Contoh2;
  echo $obj->halo();
  echo "<br>";
  echo $obj->halo();
  echo "<br>";
  echo $obj->halo();
  echo "<br>";
?>