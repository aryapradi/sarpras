<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="barang.css">
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

    <div class="content">
        <div><a href="formadd.html"> Add+</a></div>
        <table border="1">
            <tr>
                <th>Nomor</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Stock Barang</th>
                <th>Action</th>
            </tr>
            <?php
    $sql ="SELECT * FROM data_barang";
    $query = mysqli_query ($connect,$sql);
    while($data=mysqli_fetch_array($query)){
        echo "
        <tr>
            <td>$data[Nomor]</td>
            <td>$data[Nama_Barang]</td>
            <td>$data[Jenis_Barang]</td>
            <td>$data[Stock_Barang]</td>
            <td>
                <a href='formedit1.php?Nomor=".$data['Nomor']."'>Edit</a>
                <a href='hapus1.php?Nomor=".$data['Nomor']."'>Hapus</a>
            </td>
        </tr>
        ";
    }
    ?>
        </table>
    </div>
</body>
</html>
    
    
    