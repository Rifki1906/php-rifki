<?php
echo"<h2>Nilai Rapot Pelajaran Produktif</h2> <br>";
echo"<hr>";


$nama = "Rifki <br>";
$kelas = "xi rpl 3 <br>";
$jenis_kelamin= "pria <br>";

echo"nama : $nama";
echo"kelas : $kelas";
echo"jenis kelamin $jenis_kelamin";
echo"<hr>";

$nh = 90;
$nb = 80;
$ns = 90;
$nk = 80;
$nut = 100;
$nua = 100;

echo"Nilai harian : $nh <br>";
echo "Nilai bulanan : $nb <br>";
echo"Nilai sikap : $ns <br>";
echo "Nilai kehadiran : $nk <br>";
echo "Nilai UTS : $nut <br>";
echo "Nilai UAS : $nua <br>";
echo"<hr>";


$hasil = ($nh + $nb + $ns + $nk + $nut + $nua) /6;
echo"Rata - Rata : $hasil <br>";
if ($hasil >= 75) {
    echo "Status : anda tuntas ";
} else {
    echo "Status : anda tidak tuntas";
}

?>