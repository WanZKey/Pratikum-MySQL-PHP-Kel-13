<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title> Kelompok 13 </title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Data Buku Perpustakaan</h2>
    <a href="tambah.php">+ Tambah Buku Baru</a><br><br>
    <table>
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM buku";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$data['Id_buku']."</td>";
            echo "<td>".$data['judul_buku']."</td>";
            echo "<td>".$data['Penerbit']."</td>";
            echo "<td>".$data['tahun_terbit']."</td>";
            echo "<td>
                <a href='edit.php?id=".$data['Id_buku']."'>Edit</a> | 
                <a href='hapus.php?id=".$data['Id_buku']."' onclick='return confirm(\"Yakin Menghapus Buku?\")'>Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>