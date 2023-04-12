<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="dbticket";

    //koneksi
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    //cek koneksi
    if (!$conn) {
        die("koneksi gagal : " . mysqli_connect_error());
    }
    echo "koneksi oke";
    
?>