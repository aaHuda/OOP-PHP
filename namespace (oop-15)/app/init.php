<?php 
    
    // require_once 'Produk/InfoProduk.php';
    // require_once 'Produk/Product.php';
    // require_once 'Produk/komik.php';
    // require_once 'Produk/game.php';
    // require_once 'Produk/CetakInfoProduk.php';
    // require_once 'Produk/User.php';
    
    // require_once 'service/User.php';
    
    spl_autoload_register(function($class){
      // app\produk\User = ["app", "produk", "User"]
      $class = explode('\\', $class);
      $class = end($class);
      require_once __DIR__ . '/Produk/' . $class . '.php';
    }); 
    
    spl_autoload_register(function($class){
    // app\service\User = ["app", "service", "User"]
      $class = explode('\\', $class);
      $class = end($class);
      require_once __DIR__ . '/service/' . $class . '.php';
    }); 
