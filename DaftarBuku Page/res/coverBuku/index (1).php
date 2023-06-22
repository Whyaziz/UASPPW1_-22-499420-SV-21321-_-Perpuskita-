<?php
include('../connection.php');


// Fetch data from the database
$query = "SELECT * FROM daftar_buku";
$result = mysqli_query($connection, $query);

// Create an array to store the fetched books
$books = array();

while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
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
            <a href="../Peminjaman/Index.html.php" class="nav-link d-flex flex-row align-items-center">
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

        <!-- HOT PAGE -->
        <div class="container bg-body-tertiary d-flex flex-wrap w-100 align-items-center ps-5 pt-3 mt-3">
          <h3 class="me-3">HOT</h3>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
            <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"/>
          </svg>
        </div>
        <div class="container bg-body-tertiary d-flex flex-wrap w-100 pb-5">

          <?php foreach ($books as $book): ?>
            <div class="card card-buku text-center mt-3 mx-2">
            <img class="rounded cover-buku d-flex mx-auto mt-2" src="res\coverBuku\<?php echo $book['id_gambar']; ?>" alt="...">
            <div class="card-body">
              <h5 class="card-title text-truncate"><?php echo $book['judul_buku']; ?></h5>
              <a href="#" id="pinjam-daftar" class="btn btn-primary" value="<?php echo $book['id_buku'] ?>">Pinjam</a>
            </div>
          </div>
          <?php endforeach; ?>
  
        </div>
  
      </div>
        
    </div>
      
  </div>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>