<?php
include('../connection.php');

if (isset($_POST['pinjam'])) {
    $pinjam = $_POST['pinjam'];
}
else{
    $pinjam = null;
}

if (isset($_POST['submit'])) {
    
    $id_buku = $_POST['id_buku'];
    $id_member = $_POST['id_member'];
    $kondisi_buku = $_POST['KondisiBuku'];
    $tanggal_pinjam = date("y/m/d", strtotime($_POST['tanggalPinjam']));

    $insert = "INSERT INTO peminjaman (id_buku, id_member, kondisi_buku, tanggal_pinjam) VALUES ($id_buku,$id_member, LOWER('$kondisi_buku'), $tanggal_pinjam);";
    $resultEmail = mysqli_query($connection, $insert);
    
}
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
      
      <div class="sidebar d-flex flex-column p-3 bg-body-tertiary col-12 col-md-2">
        <img class="circle" src="res/LogoLeft.png" alt="" style="height: 50px; width: 150px;">
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="../MainPage/home.php" class="nav-link d-flex flex-row align-items-center acttive" aria-current="page">
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
            <a href="#" class="nav-link d-flex flex-row align-items-center">
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


      <div class="container col-md-10 d-flex flex-column justify-content-center align-self-start py-5">

        <div class="container d-flex w-100">
          <div class="container d-flex justify-content-center">
            <form class="col-md-9 d-flex p-5 flex-column rounded bg-body-tertiary" method="POST" action="peminjaman.php">
                <h1>Form Peminjaman</h1>
                <input class="form-control d-flex mt-4 py-3" id="floatingInput" placeholder="Kode Buku" type="text" name="id_buku" value="<?php echo $pinjam ?>" pattern="[0-9]*" required>
                <input class="form-control d-flex mt-4 py-3" id="floatingInput" placeholder="Kode Member" type="text" name="id_member" pattern="[0-9]*" required>
                <input class="form-control d-flex mt-4 py-3" id="floatingInput" placeholder="Kondisi Buku" type="text" name="KondisiBuku" required>
                <input class="form-control d-flex mt-4 py-3" id="floatingInput" placeholder="Tanggal Pinjam"  type="date" name="tanggalPinjam" required>
                
                <input class="btn btn-primary mt-4" type="submit" name="submit" value="peminjaman">
            </form>
          </div>
        </div>

      </div>


    </div>
  </div>

</body>
</html>