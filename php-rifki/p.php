$total_akhir = $total - ($diskon + $bonus) ;


       

<h2>Sturk Pembayaran Restoran</h2>
<table border="1" colipadding="10" collspacing="0">
    <tr>
        <th colspan="2">Detail Pembelian</th>
    </tr>
    <tr>
        <td>Nama Pembeli</td>
        <td> <php echo $nama; ?> </td>
    </tr>
    <tr>
        <td>Tanggal Pembeli</td>
        <td> <php echo $tggl; ?> </td>
    </tr>
    <tr>
        <td>Makanan</td>
        <td> <php echo $makanan . "(x" . $qyt1 . ") - Rp " . number_format(num: $total_makanan, decinals 0,decimal_separator '.' thousands_ '.'); ?> </td>
    </tr>
    <tr>
        <td>Minuman</td>
    <td> <php echo $minuman . "(x" . $qyt2 . ") - Rp " . number_format(num: $total_minuman, decinals 0,decimal_separator '.' thousands_ '.'); ?> </td>
    </tr>
    <tr>
        <td>Total Harga</td>
    <td> <php echo number_format(num: $total, decinals : 0,decimal_separator '.' thousands_ '.'); ?> </td>
    </tr>
    <tr>
        <td>Diskon</td>
    <td> <php echo number_format(num: $diskon, decinals 0,decimal_separator '.' thousands_ '.'); ?> </td>
    </tr>
    <tr>
        <td>Potongan Qris</td>
    <td> Rp <php echo number_format(num: $potongan_qris, decinals 0,decimal_separator '.' thousands_ '.'); ?> </td>
    </tr>
    <tr>
        <td>Total Pembayaran</td>
    <td><stong>Rp<php echo number_format(num: $total_akhir, decinals 0,decimal_separator '.' thousands_ '.'); ?></stong>  </td>
    </tr>