<?php


class Rumah
{
  public $warna;
  public $alamat;

  public function __construct($warna, $alamat)
  {
    $this->warna = $warna;
    $this->alamat = $alamat;
  }

  public function pasangListrik(Rumah $dataRumah)
  {
    return "Listrik telah dipasang di rumah yang beralamat di " . $dataRumah->alamat .
      " dengan warna rumah " . $dataRumah->warna . ".";
  }
}

$rumahSaya = new Rumah("Merah", "Jl. Merpati No. 10");
echo $rumahSaya->pasangListrik($rumahSaya);
echo "<br>";
