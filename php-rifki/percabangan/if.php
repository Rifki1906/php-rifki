<?php 

$nilai = -1;
if($nilai >= 100){
    echo"nilai tidak vailed";
}
elseif ($nilai >= 90) {
    echo "sangat baik";
} 
elseif($nilai >= 80){
    echo"baik";
}
elseif($nilai >= 70){
    echo"cukup";
}
elseif($nilai >= 60){
    echo"kurang";
}
elseif($nilai >= 50){
    echo"sangat kurang";
}
elseif($nilai >= 0){
    echo"anda harus lebih giat belajar";
}
elseif ($nilai < 0) {
    echo "tidak vailed";
} 



?>