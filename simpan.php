<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $Nomor =$_POST['Nomor'];
        $Nama_Barang =$_POST['Nama_Barang'];
        $Jenis_Barang =$_POST['Jenis_Barang'];
        $Stock_Barang =$_POST['Stock_Barang'];

        $sql ="INSERT INTO data_barang (`Nomor`, `Nama_Barang`, `Jenis_Barang`, `Stock_Barang`) VALUES ('$Nomor','$Nama_Barang','$Jenis_Barang','$Stock_Barang')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: Databarang.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }
?>