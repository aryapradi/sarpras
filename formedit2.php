<?php
    include 'koneksi.php';

    $Nisn =$_GET['Nisn'];
    $sql = "SELECT * FROM data_peminjam WHERE Nisn='$Nisn'";
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
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editpeminjam.css">
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
    <h2>Edit Data Peminjam</h2>
    </div>
<form method="post" action="edit2.php">
       <p><label>Nisn : <input type="number" name="Nisn" value="<?php echo $data['Nisn'] ?>" required="requaired"></label></p>
        <p><label>Peminjam : <input type="text" name="Peminjam" value="<?php echo $data['Peminjam'] ?>"></label></p>
        <p><label>Barang : <input type="text" name="Barang" value="<?php echo $data['Barang'] ?>"></label></p>
        <p><label>Kelas : <input type="text" name="Kelas" value="<?php echo $data['Kelas'] ?>"></label></p>
        <p><label>Jenis Kelamin : <input type="text" name="Jenis_Kelamin" value="<?php echo $data['Jenis_Kelamin'] ?>"></label></p>
        <input type="submit" name="simpan" value="simpan"> 
        
    </form>
</body>
</html>
</body>
</html>