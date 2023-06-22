<?php
include('../connection.php');

if (isset($_POST['submit'])) {
    
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    
    if ($password1 = $password2) {

        $insert = "INSERT INTO member (nama_member, gender, email_member, password_member) VALUES (LOWER('$nama'),'$gender', LOWER('$email'), '$password1');";
        $resultEmail = mysqli_query($connection, $insert);

        header("Location: ../LoginPage/login.php");
        exit();

    } else {

        $errorMessage = "Password Tidak Sama!";
        echo '<script>alert("' . $errorMessage . '");</script>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="latar parent-container min-vh-100 d-flex">
        <div class="container d-flex justify-content-center my-auto">
            <form class="col-md-6 bg-white d-flex p-5 flex-column rounded" method="POST" action="signIn.php">
                <h1>Halaman Sign In</h1>
                <input class="form-control d-flex mt-4 py-3" id="floatingInput" placeholder="Nama" type="text" name="nama" required>
                <input class="form-control d-flex mt-4 py-3" id="floatingInput" placeholder="Gender" type="text" name="gender" required>
                <input class="form-control d-flex mt-4 py-3" id="floatingInput" placeholder="Email Address" type="email" name="email" required>
                <input class="form-control d-flex mt-4 py-3" id="floatingPassword" placeholder="Password" type="password" name="password1" required>
                <input class="form-control d-flex mt-4 py-3" id="floatingPassword" placeholder="Konfrimasi Password" type="password" name="password2" required>
                <div class="checkbox my-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
                <a href="../LoginPage/login.php">Sudah Punya Akun</a>
            </form>
        </div>

    </div>
    
</body>

</html>
