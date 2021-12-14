<?php

$server = "localhost";
$username ="root";
$password = "";
$database = "26_mywebsite_12rpl2";

$konek = mysqli_connect($server,$username,$password,$database);

if (!$konek) {
    die("gagal koneksi<br>".mysqli_connect_error()."<br>".mysqli_connect_errno());
}else{
   // echo "koneksi berhasil";
}
?>