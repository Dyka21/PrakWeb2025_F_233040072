<?php



class Produk {
    private $judul, 
            $penulis, 
            $penerbit,
            $harga;

    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
  
    
    public function getJudul() { [cite: 490-492]
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }
    
    public function getPenerbit() {
        return $this->penerbit;
    }

    public function getHarga() { [cite: 494]
        return $this->harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
    
    public function setJudul($judulBaru) {
       
        $this->judul = $judulBaru;
    }
    
}
?>