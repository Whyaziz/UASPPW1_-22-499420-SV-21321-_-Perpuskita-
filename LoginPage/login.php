<?php
include('../connection.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $esearch = "SELECT * FROM member WHERE email_member = '$email'";
    $resultEmail = mysqli_query($connection, $esearch);
    $psearch = "SELECT * FROM member WHERE password_member = '$password'";
    $resultPass = mysqli_query($connection, $psearch);

    
    if (mysqli_num_rows($resultEmail) && mysqli_num_rows($resultPass)) {

        header("Location: ../MainPage/home.php");
        exit();

    } else {

        $errorMessage = true;
        
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="latar parent-container min-vh-100 d-flex">
        <div class="container d-flex justify-content-center my-auto">
            <form class="col-md-6 bg-white d-flex p-5 flex-column rounded" method="POST" action="login.php">
                <h1>Halaman Login</h1>
                <input class="form-control d-flex mt-4 py-3" id="floatingInput" placeholder="Email Address" type="email" name="email" required>
                <input class="form-control d-flex mt-4 py-3" id="floatingPassword" placeholder="Password" type="password" name="password" required>
                <div class="checkbox my-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
                <a href="../SignIn Page/signIn.php">Belum Punya Akun</a>
            </form>
        </div>

    </div>

    <script>
        var errorMessage = <?php echo json_encode($errorMessage); ?>;

        if (errorMessage) {
            alert("Email atau Password Salah!");
        }
    </script>
    
</body>

</html>
