<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $Nisn =$_POST['Nisn'];
        $Peminjam =$_POST['Peminjam'];
        $Barang =$_POST['Barang'];
        $Kelas =$_POST['Kelas'];
        $Jenis_Kelamin =$_POST['Jenis_Kelamin'];

        $sql ="INSERT INTO `data_peminjam`(`Nisn`, `Peminjam`, `Barang`, `Kelas`, `Jenis_Kelamin`) VALUES ('$Nisn','$Peminjam','$Barang','$Kelas','$Jenis_Kelamin')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: Datapeminjam.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }
?>