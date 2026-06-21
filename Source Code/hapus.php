<?php
include 'koneksi.php';
$id_hapus = $_GET['id'];
$sql = "DELETE FROM buku WHERE Id_buku='$id_hapus'";

if(mysqli_query($koneksi, $sql)){
    header("Location: index.php");
} else {
    echo "Gagal hapus data.";
}
?>