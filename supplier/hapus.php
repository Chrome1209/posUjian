<?php
if(isset($_GET['id'])) {
    include_once "koneksi.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM supplier WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: index.php?m=supplier');
    } else {
        include 'index.php?m=supplier';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal dihapus")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}