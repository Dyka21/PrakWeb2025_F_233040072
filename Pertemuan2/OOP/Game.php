<?php

class Game extends Produk {
    
    public $waktuMain;

public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain ) {
parent::__construct($judul, $penulis, $penerbit, $harga);
$this->waktuMain = $waktuMain; 
}

public function getInfoProduk() {
$infoParent = parent::getInfoProduk();
return "Game: {$infoParent} ~ {$this->waktuMain} Jam.";
}
}

?>