<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="peminjam.css">
    <title>Document</title>
</head>
<body>
<div class="sidebar">
        <header>SarPras</header>
        <ul>
            <li><a href="Databarang.php"><i class="#"></i>Data Barang</a></li>
            <li><a href="Datapeminjam.php"><i class="#"></i>Data Peminjam</a></li>
        </ul>
    </div>

    <div class="peminjam">
        <div><a href="addpeminjam.html">Tambah Siswa</a></div>
        <table border="1">
            <tr>
                <th>Nisn</th>
                <th>Peminjam</th>
                <th>Barang</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
            </tr>
            <?php
    $sql ="SELECT * FROM data_peminjam";
    $query = mysqli_query ($connect,$sql);
    while($data=mysqli_fetch_array($query)){
        echo "
        <tr>
            <td>$data[Nisn]</td>
            <td>$data[Peminjam]</td>
            <td>$data[Barang]</td>
            <td>$data[Kelas]</td>
            <td>$data[Jenis_Kelamin]</td>
            <td>
                <a href='formedit2.php? Nisn=".$data['Nisn']."'>Edit</a>
                <a href='hapus2.php? Nisn=".$data['Nisn']."'>Hapus</a>
            </td>
        </tr>
        ";
    }
    ?>
        </table>
    </div>

    
</body>
</html>