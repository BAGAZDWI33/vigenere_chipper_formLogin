<?php
$mysqli = new mysqli('localhost', 'root', '', 'tutorial-formlogin');

if ($mysqli->connect_error) {
    die('Koneksi ke MySQL gagal: ' . $mysqli->connect_error);
} else {
    echo 'Koneksi ke MySQL berhasil.';
    $mysqli->close();
}
