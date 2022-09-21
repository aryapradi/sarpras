<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:Databarang.php');
    }

    $Nomor = $_POST['Nomor'];
    $Nama_Barang = $_POST['Nama_Barang'];
    $Jenis_Barang = $_POST['Jenis_Barang'];
    $Stock_Barang = $_POST['Stock_Barang'];

    $sql = "UPDATE `data_barang` SET `Nomor`='$Nomor',`Nama_Barang`='$Nama_Barang',`Jenis_Barang`='$Jenis_Barang',`Stock_Barang`='$Stock_Barang' WHERE Nomor='$Nomor'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: Databarang.php');
    }else{
        header('Location:hapus.php?status=gagal');
    }