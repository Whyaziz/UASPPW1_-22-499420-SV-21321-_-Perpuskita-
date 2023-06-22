<?php
include('../connection.php');

if(isset($_POST['keyword'])){

  $keyword = $_POST["keyword"];

  $books = array();

  $query = "SELECT * FROM daftar_buku WHERE LOWER(judul_buku) LIKE '%$keyword%'";
  $result = mysqli_query($connection, $query);

  if(isset($result)){
    while ($row = mysqli_fetch_assoc($result)) {
        $books[] = $row;
    }

    if(mysqli_num_rows($result)){
      
    }
    else{
      $tidakDitemukan = true;
    }

  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

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
            <a href="../MainPage/home.php" class="nav-link d-flex flex-row align-items-center">
              <ion-icon name="home-outline"></ion-icon>
              <span class="ms-2">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link d-flex flex-row align-items-center active"  aria-current="page">
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

        <!-- SEARCH -->
        <div class="cari-Buku rounded col-md-12 bg-body-tertiary d-flex flex-wrap flex-row p-5 position-sticky mt-2 top-0">

          <div class="col-12 col-md-6 d-flex flex-column">
            <h2>Hallo, <span>Muhammad Rizky Aziz</span></h2>
            <p>Silahkan memilih buku anda</p>
          </div>
          <div class="col-12 col-md-6 d-flex flex-wrap flex-column align-items-end">
            <form class="d-flex flex-row" id="search-form" method="post" action="search.php">
              <input class="form-control" placeholder="Search" type="text" name="keyword">
              <input class="btn btn-primary" type="submit" value="Search">
            </form>
          </div>

        </div>

        <!-- RESULT PAGE -->
        <div class="container bg-body-tertiary d-flex flex-wrap w-100 align-items-center ps-5 pt-3 mt-3">
          <h3 class="me-3">Hasil</h3>
        </div>
        <div class="container bg-body-tertiary d-flex flex-wrap w-100 pb-5">

          <?php foreach ($books as $book): ?>
            <div class="card card-buku text-center mt-3 mx-2">
            <img class="rounded cover-buku d-flex mx-auto mt-2" src="res\coverBuku\<?php echo $book['id_gambar']; ?>" alt="...">
            <div class="card-body">
              <h5 class="card-title text-truncate"><?php echo $book['judul_buku']; ?></h5>
              <form method="POST" action="../Peminjaman/peminjaman.php">
                  <input type="hidden" name="pinjam" value="<?php echo $book['id_buku']; ?>">
                  <button class="btn btn-primary" type="submit">Pinjam</button>
              </form>
            </div>
          </div>
          <?php endforeach; ?>

          <div id="tidakDitemukan" class="container">
            
          </div>
  
        </div>
        
      </div>
      
    </div>
  </div>

  <script>
      var tidakDitemukan = <?php echo json_encode($tidakDitemukan); ?>;

      if (tidakDitemukan) {
        var divElem = document.getElementById('tidakDitemukan');
        divElem.insertAdjacentHTML('afterbegin', '<h1 id="elemenID" class="text-center">Pencarian Tidak Ditemukan</h1>');
      }

  </script>

</body>
</html>