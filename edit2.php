<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        header ('location:Datapeminjam.php');
    }

    $Nisn = $_POST['Nisn'];
    $Peminjam = $_POST['Peminjam'];
    $Barang = $_POST['Barang'];
    $Kelas = $_POST['Kelas'];
    $Jenis_Kelamin =$_POST['Jenis_Kelamin'];

    $sql = "UPDATE `data_peminjam` SET `Nisn`='$Nisn',`Peminjam`='$Peminjam',`Barang`='$Barang',`Kelas`='$Kelas',`Jenis_Kelamin`='$Jenis_Kelamin' WHERE Nisn='$Nisn'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: Datapeminjam.php');
    }else{
        header('Location:hapus.php?status=gagal');
    }