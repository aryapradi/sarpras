<?php
    include 'koneksi.php';

    $Nomor =$_GET['Nomor'];
    $sql = "SELECT * FROM data_barang WHERE Nomor='$Nomor'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) <1){
        die("Data Tidak Ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editbarang.css">
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
    <div class="h2">
    <h2>Edit Data Barang</h2>
    </div>
<form method="post" action="edit.php">
       <p><label>Nomor : <input type="number" name="Nomor" value="<?php echo $data['Nomor'] ?>" required="requaired"></label></p>
        <p><label>Nama Barang : <input type="text" name="Nama_Barang" value="<?php echo $data['Nama_Barang'] ?>"></label></p>
        <p><label>Jenis Barang : <input type="text" name="Jenis_Barang" value="<?php echo $data['Jenis_Barang'] ?>"></label></p>
        <p><label>Stock Barang : <input type="text" name="Stock_Barang" value="<?php echo $data['Stock_Barang'] ?>"></label></p>
        <input type="submit" name="simpan" value="simpan"> 
        
    </form>
</body>
</html>