<?php
    include 'koneksi.php';

    if(isset($_GET['Nomor'])) {
        header('Location: Databarang.php');
    }

    $Nomor = $_GET['Nomor'];
    $sql = "DELETE FROM data_barang WHERE Nomor='$Nomor'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: Databarang.php');
    }else{
        header('Location: hapus1.php?status=gagal');
    }
?>