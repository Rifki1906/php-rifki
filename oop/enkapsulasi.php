<?php

class contoh{
    public $nama = "Robben";

    private function perkenalan(){
        echo"Nama Saya Jml";
    }
    private function jml(){
        echo "iyus";
    }
    public function tampil(){
        echo $this->perkenalan();
        echo $this->nama;
        echo $this->jml();
    }
}

$cetak = new contoh();

echo $cetak->tampil();
echo"<br>";
echo $cetak->nama;
echo"<br>";
echo $cetak->jml();

?>