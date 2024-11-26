<?php

class bangun_datar{
    function persegipanjang($panjang,$lebar){
        echo"panjang : $panjang <br><br>";
        echo"Lebar : $lebar<br><br>";
        $hasil = $panjang * $lebar;
        echo"Hasil : $hasil<br><br>";
    }
    
    function persegi($sisi){
    
    echo"Sisi : $sisi<br><br>";
    echo"Rumus : S x S <br><br>";
        $hasil = $sisi * $sisi;
    echo"Hasil : $hasil<br><br>";
    }

    function segitiga($alas,$tinggi){
        echo"Alas : $alas<br><br>";
        echo"Tinggi : $tinggi<br><br>";
        echo"Rumus : 1/2 x (a x b)<br><br>";
        $hasil=$alas * $tinggi;
        echo"Hasil $hasil<br><br>";
    }

    function lingkaran($ruas){
        echo"Ruas : $ruas<br><br>";
        echo"Rumus : phi x r x r<br><br>";
        $hasil = $ruas * $ruas ;
        echo"Hasil : $hasil<br><br>";
    }
}


$cetak = new bangun_datar();
echo $cetak->persegipanjang(2,8);
echo"<hr>";
echo $cetak->persegi(9);
echo"<hr>";
echo $cetak->segitiga(2,9);
echo"<hr>";
echo $cetak->lingkaran(1);
?>