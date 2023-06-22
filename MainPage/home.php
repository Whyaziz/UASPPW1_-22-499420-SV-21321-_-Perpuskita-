<?php
include('../connection.php');

    $count = "SELECT COUNT(*) AS jumlah_baris FROM peminjaman;";
    $result = mysqli_query($connection, $count);
    $row = mysqli_fetch_assoc($result);
    $jumlahBaris = $row['jumlah_baris'];

    $Ncount = "SELECT COUNT(*) AS sedang_pinjam FROM peminjaman WHERE tanggal_pinjam IS NULL;";
    $Nresult = mysqli_query($connection, $Ncount);
    $row = mysqli_fetch_assoc($Nresult);
    $jumlah_pinjam = $row['sedang_pinjam'];

    $Tcount = "SELECT COUNT(*) AS terlambat FROM peminjaman WHERE tanggal_pinjam IS NOT NULL AND tanggal_pinjam <= DATE_SUB(NOW(), INTERVAL 7 DAY);";
    $Tresult = mysqli_query($connection, $Tcount);
    $row = mysqli_fetch_assoc($Tresult);
    $terlambat = $row['terlambat'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="parent-container">

    <div class="row d-flex flex-wrap w-100">
      
      <!-- SIDEBAR -->
      <div class="sidebar d-flex flex-column p-3 bg-body-tertiary col-12 col-md-2 position-sticky">
        <img class="circle" src="res/LogoLeft.png" alt="" style="height: 50px; width: 150px;">
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="home.php" class="nav-link d-flex flex-row align-items-center active" aria-current="page">
              <ion-icon name="home-outline"></ion-icon>
              <span class="ms-2">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../DaftarBuku Page/index.php" class="nav-link d-flex flex-row align-items-center">
              <ion-icon name="library-outline"></ion-icon>
              <span class="ms-2">Daftar Buku</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../Peminjaman/peminjaman.php" class="nav-link d-flex flex-row align-items-center">
              <ion-icon name="book-outline"></ion-icon>
              <span class="ms-2">Peminjaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link d-flex flex-row align-items-center">
              <ion-icon name="checkbox-outline"></ion-icon>
              <span class="ms-2">Pengembalian</span>
            </a>
          </li>
          
        </ul>
        <hr>
        <div class="container d-flex flex-row">
          <img class="circle" src="res/profile.png" alt="" style="height: 40px; width: auto;">
          <div class="container d-flex flex-column">
            <p class="my-auto text-truncate">Welcome <span>Muhammad Rizky Aziz</span></p>
          </div>
        </div>

      </div>
      <!-- SIDEBAR END -->


      <div class="container col-md-10 d-flex flex-column ps-4">

        <div class="banner container d-flex flex-column text-center justify-content-center my-5 p-3">
          <img class="d-flex mx-auto" src="res/Logo.png" alt="" style="height: 100px; width: 100px;">
          <h2>Selamat Datang di Perpuskita</h2>
        </div>

        <div class="container bg-body-tertiary rounded d-flex flex-wrap flex-row justify-content-center">
          
          <div class="col-8 card text-white bg-info m-3" style="width: 18rem; height: 12rem;">
            <div class="card-header"><h4>Riwayat</h4></div>
            <div class="card-body">
              <h1 class="card-title"><?php echo $jumlahBaris;?></h1><h5>Buku Telah Dipinjam</h5>
            </div>
          </div>
          
          <div class="col-8 card text-white bg-success m-3" style="width: 18rem; height: 12rem;">
            <div class="card-header"><h4>Buku Dipinjam</h4></div>
            <div class="card-body">
            <h1 class="card-title"><?php echo $jumlah_pinjam;?></h1><h5>Buku Sedang Dipinjam</h5>
            </div>
          </div>
          
          <div class="col-8 card text-white bg-danger m-3" style="width: 18rem; height: 12rem;">
            <div class="card-header"><h4>Buku Terlambat</h4></div>
            <div class="card-body">
            <h1 class="card-title"><?php echo $terlambat;?></h1><h5>Buku Terlambat Dikembalikan</h5>
            </div>
          </div>

        </div>

        
      
      </div>
    </div>
  </div>

</body>
</html>