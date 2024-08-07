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
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#items">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#foot">Kontak</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addbook.php">Tambah Buku</a></li>
            <li><a class="dropdown-item" href="changebook.php">Ubah Buku</a></li>
            <li><a class="dropdown-item" href="book.php">Rak</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>




<header id="beranda">
        <div class="left">
            <h1>Website Perpustakaan <br><span> Siperpus Polije </span></h1>
            <p>Temukan dan baca buku - buku langka yang jarang ditemui di perpustakaan umum lainnya, hanya di siperpus polije.</p>
            <a href="book.php">
                <i class='bx bx-book-bookmark'></i>
                <span>Lihat Koleksi Buku</span>
            </a>
        </div>
        <img src="img/perpus.png">
    </header>

    <h2 class="separator">
        Buku - Buku Paling Populer
    </h2>

<!-- ========================================================================================= -->

<div class="itemss" id="items">

<?php foreach($result as $row){?>
    
<div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk2Ba6tz6b1wgEwFMRxgrqmta2NJovKzo-nA&s" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $row["nama_buku"];?></h5>
    <p class="card-text"><?= $row["pengarang"];?></p>
    <p class="card-text"><?= $row["penerbit"];?></p>
    <a href="book.php" class="btn btn-dark">Lihat Rak</a>
  </div>
</div>

<?php }?>

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