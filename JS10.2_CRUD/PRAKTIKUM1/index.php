<?php
include('koneksi.php'); // Pastikan ini di atas sebelum penggunaan $koneksi
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn-tambah">Tambah Anggota</a>

        <?php
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            echo "<table>";
            echo "<tr><th>No.</th><th>Nama</th><th>Jenis Kelamin</th><th>Telepon</th><th>Alamat</th><th>Aksi</th></tr>";

            while ($row = mysqli_fetch_array($result)) {
                $kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan';
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                echo "<td>" . htmlspecialchars($kelamin) . "</td>";
                echo "<td>" . htmlspecialchars($row['telp']) . "</td>";
                echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                echo "<td>
                          <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
                          <a href='#' onclick='konfirmasiHapus(" . $row['id'] . ", \"" . htmlspecialchars($row['nama']) . "\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Tidak ada data.</p>";
        }

        mysqli_close($koneksi);
        ?>
    </div>

    <script>
        function konfirmasiHapus(id, nama) {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data dengan Nama = " + nama + " ?");
            if (konfirmasi) {
                window.location.href = "proses.php?aksi=hapus&id=" + id;
            }
        }
    </script>
</body>
</html>
