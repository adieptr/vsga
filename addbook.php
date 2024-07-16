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

function tambah($data){

  global $conn;
  $nama = htmlspecialchars($data["nama_buku"]);
  $pengarang = htmlspecialchars($data["pengarang"]);
  $penerbit = htmlspecialchars($data["penerbit"]);

  $query = "INSERT INTO buku
  VALUES
  ('', '$nama', '$pengarang','$penerbit')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);

}


if(isset($_POST["submit"])){

  if(tambah($_POST) > 0){
      echo "
      <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'index.php';
      </script>
      ";
      
  } else{
      echo "
      <script>
      alert('data gagal ditambahkan');
      document.location.href = 'addbook.php';
      </script>
      ";
  }
}


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



<section class="form1">

<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="text1" class="form-label">Nama Buku</label>
    <input type="text"  name="nama_buku" class="form-control" id="text1" aria-describedby="texthelp">
    <div id="texthelp" class="form-text"></div>
  </div>

  <!-- <div class="mb-3">
    <label for="text1" class="form-label">Nomor ISBN</label>
    <input type="text" class="form-control" id="text1" aria-describedby="texthelp">
    <div id="texthelp" class="form-text"></div>
  </div> -->

  <div class="mb-3">
    <label for="text1" class="form-label">Pengarang</label>
    <input type="text"   name="pengarang" class="form-control" id="text1" aria-describedby="texthelp">
    <div id="texthelp" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="text1" class="form-label">Penerbit</label>
    <input type="text"  name="penerbit" class="form-control" id="text1" aria-describedby="texthelp">
    <div id="texthelp" class="form-text"></div>
  </div>

  <!-- <div class="mb-3">
    <label for="text1" class="form-label">Tanggal Terbit</label>
    <input type="date" class="form-control" id="text1" aria-describedby="texthelp">
    <div id="texthelp" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="text1" class="form-label">Harga Sewa</label>
    <input type="text" class="form-control" id="text1" aria-describedby="texthelp">
    <div id="texthelp" class="form-text"></div>
  </div> -->


  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->


  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->

  
  <button type="submit"  name="submit" class="btn btn-primary">Tambah</button>
</form>

</section>





</body>
</html>