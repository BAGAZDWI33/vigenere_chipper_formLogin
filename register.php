<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">

                    <div class="login-wrapper my-auto">
                        <h1 class="login-title">Register</h1>
                        <form method="post" action="process_login.php">
                            <!-- Menambahkan action untuk mengarahkan ke halaman pemrosesan login -->
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" name="username" id="email" class="form-control"
                                    placeholder="Username">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                            </div>
                            <button type="submit" name="register" class="btn btn-block login-btn">Register</button>
                        </form>

                        <p class="login-wrapper-footer-text">Don't have an account? <a href="index.php"
                                class="text-reset">login</a></p>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="assets/images/belajar.jpg" alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#show-registration-form").click(function() {
            window.location.href = "register.php"; // Arahkan ke halaman registrasi
        });

        $("#show-login-form").click(function() {
            window.location.href = "index.php"; // Arahkan kembali ke halaman login
        });
    });
    </script>

</body>

</html>