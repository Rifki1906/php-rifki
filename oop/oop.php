<?php

class manusia{

    public $warna;
    public $jenis_kelamin;

    public function makan(){
        echo"dia suka makan nasi";
    }
    public function minum(){
        echo"dia suka minum";
    }
}

$cetak = new manusia();

echo $cetak->makan();
echo"<br>";
echo $cetak->minum();

?>