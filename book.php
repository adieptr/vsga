<?php

$conn = mysqli_connect("localhost", "root", "", "vsga");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows =[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

// AMBIL DATA DARI TABEL MAHASISWA
$result = mysqli_query($conn , "SELECT * FROM buku");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Siperpus</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Siperpus</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>



<!-- ========================================================================================= -->
<a class="btn btn-dark m-3" href="addbook.php" role="button">Tambah Buku</a>

<div class="itemss" id="items">

<table class="table">

  <thead>

    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $a = 1;?>
    <?php foreach($result as $row){?>
        <tr>
            <td><?= $a;?></td>
            <td><?= $row["nama_buku"];?></td>
            <td><?= $row["pengarang"];?></td>
            <td><?= $row["penerbit"];?></td>
            <td><a class="btn btn-primary btn-sm" href="#" role="button"> <i class='bx bx-edit'></i></a>
 <a class="btn btn-danger btn-sm" href="#" role="button" onclick="return confirm('Anda yakin ingin menghapus data?');">
 <i class='bx bx-trash'></i></a>
 </td>
        </tr>
        <?php $a++;?>
        <?php }?>
       
    <!-- <tr>
      <th scope="row">1</th>
      <td>Lord of The Rings</td>
      <td>Harry Potter</td>
      <td>Atomic Habits</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Herman Wijaya</td>
      <td>Haji Naim</td>
      <td>Neymar Senior</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Gramedia</td>
      <td>Yamaha</td>
      <td>Komatsu</td>
    </tr> -->
  </tbody>
</table>


    </div>


    <footer id="foot">
        <h3>Sistem Informasi Pengelola Perpustakaan Polije</h3>
        <div class="right">
            <div class="links">
                <a href="#">Privacy Policy</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="social">
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-facebook-square'></i>
                <i class='bx bxl-whatsapp'></i>
            </div>
            <p>Copyright © 2024 Kholis Abdullah Adi Putra.</p>
        </div>
    </footer>

</body>
</html>