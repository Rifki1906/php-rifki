<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>    
    <h3>=====Selamat Datang Di Restoran Ku</h3>
    <form action="" method="POST">
    <table>
        
    <tr>
                <td>Nama Pembeli </td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Tanggal Beli </td>
                <td>:</td>
                <td><input type="date" name="tggl" value=""></td>
            </tr>
            <tr>
                <td>Makanan </td>
                <td>:</td>
                <td>
                <select name="mkn" id="">
                    <option value="Sushi">Sushi</option>
                    <option value="Chiken">Chiken</option>
                    <option value="Spagetti">Spagetti</option>
                    <option value="Pizza">Pizza</option>
                    <option value="Burger">Burger</option>
                </select></td>
            </tr>
            <tr>
                <td>Qty </td>
                <td>:</td>
                <td><input type="number" name="qty1" value=""></td>
            </tr>
            <tr>
                <td>Minuman </td>
                <td>:</td>
                <td>
                <select name="mnm" id="">
                    <option value="Air Mineral">Air Mineral</option>
                    <option value="Teh Manis">Teh Manis</option>
                    <option value="Jus">Jus</option>
                    <option value="Lemon Tea">Lemon Tea</option>
                    <option value="Cappucino">Cappuicino</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Qty </td>
                <td>:</td>
                <td><input type="number" name="qty2" value=""></td>
            </tr>
            <tr>
                <td>Pembayaran </td>
                <td>:</td>
                <td><input type="radio" name="bayar" value="Cash">Cash
                <input type="radio" name="bayar" value="Qris">Qris
            </td>
            </tr>
            <tr>    
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="Pesan" ></td>
            </tr>
            <hr>
            </center>
        </table>
        </form>
</body>
</html>
<hr>
<?php 

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tggl'];
    $makanan = $_POST['mkn'];
    $qty1 = $_POST['qty1'];
    $minuman = $_POST['mnm'];
    $qty2 = $_POST['qty2'];
    $bayar = $_POST['bayar'];


    $harga_makanan = [
        "Sushi" => 10000,
        "Chiken" => 20000,
        "Spagetti" => 30000,
        "Pizza" => 40000,
        "Burger" => 50000
    ];

    $harga_minuman = [
        "Air Mineral" => 5000,
        "Teh Manis" => 10000,
        "Jus" => 15000,
        "Lemon Tea" => 20000,
        "Cappucino" => 25000
    ];

    $total_makanan = $harga_makanan[$makanan] * $qty1;
    $total_minuman = $harga_minuman[$minuman] * $qty2;
    $total = $total_makanan + $total_minuman;

    $diskon = 0;
    if ($total > 100000) {
        $diskon = 0.10 * $total;
    }

    $potongan_qris = 0;
    if ($bayar == "Qris") {
        $potongan_qris = 10000;
    }

    $total_stlh_diskon = $total - $diskon;
    $total_akhir = $total_stlh_diskon - $potongan_qris; 


    
    echo "<center><div class='card' style='width: 18rem;'>
  <div class='card-body'>
    <table>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td>$nama</td>
        </tr>
        <tr>
            <td>Tanggal Beli</td>
            <td>:</td>
            <td>$tanggal</td>
        </tr>
        <tr>
            <td>Makanan Yang Dipilih</td>
            <td>:</td>
            <td>$makanan</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>Rp.$harga_makanan[$makanan]</td>
        </tr>
         <tr>
            <td>QTY</td>
            <td>:</td>
            <td>$qty1</td>
        </tr>
        <tr>
            <td>Minuman Yang Dipilih</td>
            <td>:</td>
            <td>$minuman</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>Rp.$harga_minuman[$minuman]</td>
        </tr>
        <tr>
            <td>QTY</td>
            <td>:</td>
            <td>$qty2</td>
        </tr>
        <tr>
            <td>Pembayaran</td>
            <td>:</td>
            <td>$bayar</td>
        </tr>
          <tr>
            <td>Total</td>
            <td>:</td>
            <td>Rp.$total</td>
        </tr>
        </table>
  </div>
</div>

<div class='card' style='width: 18rem;'>
<div class='card-body'>
  <table>
        <tr>
            <td>Diskon 10%</td>
            <td>:</td>
            <td>Rp.$diskon</td>
        </tr>
        </table>
  </div>
</div>

<div class='card ' style='width: 18rem;'>
  <div class='card-body'>
  <table>
  <tr>
        <td>potongan Pembayaran</td>
        <td>:</td>
        <td>Rp.$potongan_qris</td>
    </tr>
    <tr>
            <td>Total Pembayaran</td>
            <td>:</td>
            <td>Rp.$total_akhir</td>
        </tr>
    </table>
  </div>
</div></center>";

?>


</table>
<?php
}
?>