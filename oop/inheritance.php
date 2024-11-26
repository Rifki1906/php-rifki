<?php 

// class utama
class kendaraan{
    protected $warna = "biru";
    public $merk = "BMW";
}
// class keturunan  
class mobil extends kendaraan{
    public function deskripsi(){
        echo"warna mobil $this->warna <br>";
        echo"Merk mobil $this->merk";
    }
}
$cetak = new mobil();
echo $cetak->deskripsi();
echo"<br>";


?>