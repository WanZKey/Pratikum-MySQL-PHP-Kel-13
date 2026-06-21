<?php 
include 'koneksi.php';
$id_ambil = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE Id_buku='$id_ambil'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Edit Data Buku</h2>
    <form method="POST">
        ID Buku: <b><?php echo $data['Id_buku']; ?></b><br>
        Judul: <input type="text" name="judul" value="<?php echo $data['judul_buku']; ?>"><br>
        Penerbit: <input type="text" name="penerbit" value="<?php echo $data['Penerbit']; ?>"><br>
        Tahun Terbit: <input type="date" name="tahun" value="<?php echo $data['tahun_terbit']; ?>"><br>
        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if(isset($_POST['update'])){
        $judul = $_POST['judul'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        $sql = "UPDATE buku SET judul_buku='$judul', Penerbit='$penerbit', tahun_terbit='$tahun' WHERE Id_buku='$id_ambil'";
        if(mysqli_query($koneksi, $sql)){
            header("Location: index.php");
        }
    }
    ?>
</body>
</html>