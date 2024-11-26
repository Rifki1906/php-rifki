<?php 

$years = date("y");
echo $years . "&nbsp;";
switch ($years) {
    case ($years % 4 == 0 ):
    echo "Tahun Kabisat";
        break;
    
    default:
        echo"Bukan Tahun Kabisat";
}

?>