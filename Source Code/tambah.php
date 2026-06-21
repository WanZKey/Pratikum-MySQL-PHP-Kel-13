<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Kelompok 13</title>
</head>
<body>
    <h2>Tambah Data Buku</h2>
    <form method="POST">
        ID Buku: <input type="text" name="id_buku" placeholder="Contoh: B000021" required><br>
        Judul: <input type="text" name="judul" required><br>
        Penerbit: <input type="text" name="penerbit" required><br>
        Tahun Terbit: <input type="date" name="tahun" required><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if(isset($_POST['simpan'])){
        $id = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        // Query INSERT ke tabel buku
        $sql = "INSERT INTO buku (Id_buku, judul_buku, Penerbit, tahun_terbit) VALUES ('$id', '$judul', '$penerbit', '$tahun')";
        
        if(mysqli_query($koneksi, $sql)){
            echo "<script>
                alert('Data Berhasil Ditambahkan');
                window.location.href='index.php';
            </script>";
        } else {
            echo "<script>
                alert('Gagal tambah data: " . mysqli_error($koneksi) . "');
            </script>";
        }
    }
    ?>
</body>
</html>