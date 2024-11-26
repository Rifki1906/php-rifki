<?php 
$day = date("D");
 echo $day . "<br>";
switch ($day) {
    case 'Mos': $day = "Senin";
        break;
     case 'Tue': $day = "Selasa";
        break;
         case 'Wed': $day = "Rabu";
        break;
         case 'Thu': $day = "Kamis";
        break;
         case 'Fri': $day = "Jumat";
        break;
         case 'sat': $day = "Sabtu";
        break;
         case 'Sun': $day = "Minggu";
        break;
    default:
        $day = "Kiamat";
}
echo "Hari ini hari $day";



?>