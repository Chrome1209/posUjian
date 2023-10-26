<?php
if(isset($_POST['update'])) {
    include_once "koneksi.php";
    $id           = $_POST['id'];
    $nama         = $_POST['nama'];
    $alamat       = $_POST['alamat'];
    $kontak       = $_POST['kontak'];

    $sql = "UPDATE supplier SET nama='$nama', alamat='$alamat', kontak='$kontak' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        // var_dump($sql);
        header('Location: index.php?m=supplier');
    } else {
        include 'index.php?m=supplier';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal diupdate")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}