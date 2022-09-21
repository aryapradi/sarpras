<?php
    include 'koneksi.php';

    if(isset($_GET['Nisn'])) {
        header('Location: Datapeminjam.php');
    }

    $Nisn = $_GET['Nisn'];
    $sql = "DELETE FROM data_peminjam WHERE Nisn='$Nisn'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: Datapeminjam.php');
    }else{
        header('Location: hapus2.php?status=gagal');
    }
?>