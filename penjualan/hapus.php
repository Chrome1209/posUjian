<?php
if(isset($_GET['id'])) {
    include_once "koneksi.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM penjualan WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: index.php?m=penjualan');
    } else {
        include 'index.php?m=penjualan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal dihapus")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}