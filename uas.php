<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penggajian</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { width: 400px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 10px; }
        table { width: 100%; }
        td { padding: 10px; }
        h3 { text-align: center; }
        .hasil { margin-top: 20px; width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
    </style>
</head>
<body>
    <center>
        <form action="" method="POST">
            <h3><b>SISTEM PENGGAJIAN</b></h3>
            <h3><b>GURU/KARYAWAN YAYASAN ASSALAAM</b></h3>
            <table>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><input type="text" name="nomor" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td>
                        <select name="unit_pendidikan" required>
                            <option value="TK">TK</option>
                            <option value="TPQ">TPQ</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="MA">MA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Gajian</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_gajian" required></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <select name="jabatan" required>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakasek">Wakasek</option>
                            <option value="Guru">Guru</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><input type="text" name="lama_kerja" required></td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td>
                        <select name="status_kerja" required>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>BPJS</td>
                    <td>:</td>
                    <td><input type="text" name="bpjs" required></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><input type="text" name="pinjaman" required></td>
                </tr>
                <tr>
                    <td>Cicilan</td>
                    <td>:</td>
                    <td><input type="text" name="cicilan" required></td>
                </tr>
                <tr>
                    <td>Infaq</td>
                    <td>:</td>
                    <td><input type="text" name="infaq" required></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align:center;">
                        <input type="submit" name="proses" value="Proses">
                    </td>
                </tr>
            </table>
        </form>
    </center>

    <?php
      // Proses Input
      if (isset($_POST['proses'])) {
        $no = $_POST['nomor'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $statusKerja = $_POST['status_kerja'];
        $bpjs = $_POST['bpjs'];
        $pinjaman = $_POST['pinjaman'];
        $cicilan = $_POST['cicilan'];
        $infaq = $_POST['infaq'];

        $karyawan = new Penggajian($nama, $jabatan, $statusKerja, $bpjs, $pinjaman, $cicilan, $infaq);
        $karyawan->tampilkanRincian();
    }
    // Kelas Penggajian
    class Penggajian {
        private $no;
        private $nama;
        private $jabatan;
        private $statusKerja;
        private $gajiPokok;
        private $bonus;
        private $bpjs;
        private $pinjaman;
        private $cicilan;
        private $infaq;

        public function __construct($no, $nama, $jabatan, $statusKerja, $bpjs, $pinjaman, $cicilan, $infaq) {
            $this->no = $no;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->statusKerja = $statusKerja;
            $this->bpjs = $bpjs;
            $this->pinjaman = $pinjaman;
            $this->cicilan = $cicilan;
            $this->infaq = $infaq;
            $this->setGajiPokokDanBonus();
        }

        private function setGajiPokokDanBonus() {
            switch ($this->jabatan) {
                case "Kepala Sekolah":
                    $this->gajiPokok = 10000000;
                    break;
                case "Wakasek":
                    $this->gajiPokok = 7000000;
                    break;
                case "Guru":
                    $this->gajiPokok = 5000000;
                    break;
                case "Karyawan":
                    $this->gajiPokok = 2500000;
                    break;
                default:
                    $this->gajiPokok = 0;
            }
            $this->bonus = ($this->statusKerja === "Tetap") ? 1000000 : 0;
        }

        public function hitungGajiBersih() {
            $gajiKotor = $this->gajiPokok + $this->bonus;
            $potongan = $this->bpjs + $this->pinjaman + $this->cicilan + $this->infaq;
            return $gajiKotor - $potongan;
        }

        public function tampilkanRincian() {
            echo "<div class='hasil'>";
            echo "<h3>Rincian Gaji</h3>";
            echo "No : {this->no}<br>";
            echo "Nama: {$this->nama}<br>";
            echo "Jabatan: {$this->jabatan}<br>";
            echo "Status Kerja: {$this->statusKerja}<br>";
            echo "Gaji Pokok: Rp " . number_format($this->gajiPokok, 0, ',', '.') . "<br>";
            echo "Bonus: Rp " . number_format($this->bonus, 0, ',', '.') . "<br>";
            echo "Potongan Total: Rp " . number_format($this->bpjs + $this->pinjaman + $this->cicilan + $this->infaq, 0, ',', '.') . "<br>";
            echo "Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br>";
            echo "</div>";
        }
    }

  
    ?>
</body>
</html>