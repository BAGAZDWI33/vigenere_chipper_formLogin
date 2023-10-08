<?php
//koneksi
$koneksi = mysqli_connect('localhost', 'root', '', 'tutorial-formlogin');

//daftar
if (isset($_POST['register'])) {
    //jika tombol register diklik

    $username = $_POST['username'];
    $password = $_POST['password']; //pure inputan user--blom dienkripsi

    //fungsi enkripsi
    $epassword = password_hash($password, PASSWORD_DEFAULT);

    //inser to db
    $insert = mysqli_query($koneksi, "INSERT INTO users (username,password) values ('$username','$epassword')");

    if ($insert) {
        //jika berhasil
        header('localhost:index.php'); //redirect ke halaman login

    } else {
        //jika gagal
        echo '
        <script>
        alert("Registrasi gagal");
        window.location.href="register.php";
        </script>
        ';
    }
}
if (isset($_POST['login'])) {
    // Jika tombol login diklik

    $username = $_POST['username'];
    $password = $_POST['password']; // Inputan pengguna yang belum dienkripsi

    // Query untuk mendapatkan data pengguna berdasarkan username
    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");

    if ($result) {
        // Jika query berhasil dieksekusi
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            // Jika pengguna dengan username yang ditemukan
            $passwordsekarang = $row['password'];

            // Verifikasi password
            if (password_verify($password, $passwordsekarang)) {
                // Jika password benar
                header('location:index.php'); // Redirect ke halaman login
            } else {
                // Jika password salah
                echo '
                <script>
                alert("Password salah");
                window.location.href="register.php";
                </script>
                ';
            }
        } else {
            // Jika pengguna dengan username tidak ditemukan
            echo '
            <script>
            alert("Username tidak ditemukan");
            window.location.href="register.php";
            </script>
            ';
        }
    } else {
        // Jika query gagal dieksekusi
        echo '
        <script>
        alert("Login gagal");
        window.location.href="register.php";
        </script>
        ';
    }
}
