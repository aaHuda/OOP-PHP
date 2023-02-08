<?php 
  define('NAMA', "M.HUDAYANA");
  
  echo NAMA;
  
  echo "<br>";
  
  const UMUR = 17;
  
  echo UMUR;
  
  echo "<br>";
  
  
  class Coba {
    const KELAS = 'TKJ';
  }
  
  echo Coba::KELAS;
  
  function Coba() {
    return __FUNCTION__;
  }
  
  echo Coba();
  
  class Cobaa {
    public $kelas = __CLASS__;
  }
  
  $obj = new Cobaa;
  echo $obj->kelas;