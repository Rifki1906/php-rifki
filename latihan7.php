<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="POST">
        <h2><b>Bilangan</b></h2>
        <table>
        <tr>
                <td>Masukan Bilangan </td>
                <td>:</td>
                <td><input type="text" name="masuk" value=""></td>
            </tr>
            <tr>
                <td>Jenis Bilangan </td>
                <td>:</td>
                <td>
                <select name="jenis" id="">
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                    <option value="Kelipatan 5">Kelipatan 5</option>
                    <option value="Besar ke Kecil">Besar ke Kecil</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="proses" ></td>
            </tr>
            </form>
            </table>
    
</body>
</html>
<br>
<?php

if (isset($_POST['proses'])) {
    $bilangan =$_POST['masuk'];
    $jenis = $_POST['jenis'];


    if ($jenis == "Ganjil") {
        echo"Ganjil : ";
     for ($i=1; $i <= $bilangan; $i++) { 
        if ($i % 2 !=0) {
            echo $i ." ";
        }
     }
    }

    else if ($jenis == "Genap") {
        echo"Genap : "; 
        for ($i=2; $i <= $bilangan; $i++) { 
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    }

    else if ($jenis == "Kelipatan 5") {
        echo"Kelipatan 5 : ";
        for ($i=5; $i <= $bilangan; $i += 5) { 
                echo $i . " ";
            }
        }
    

    else if ($jenis == "Besar ke Kecil") {
        echo"Besar ke Kecil :";
        for ($i= $bilangan; $i >= 1; $i--) { 
         
                echo $i . " ";
            }
        }
    
}

 echo"</center>";

?>