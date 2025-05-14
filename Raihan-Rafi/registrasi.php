<?php
include 'koneksi.php';

$nama =$_POST ['nama'];
$username =$_POST ['username'];
$password =$_POST ['password'];
$level =$_POST ['level'];


$queryuser = "INSERT INTO user (nama, username, password, level) 
VALUES ('$nama','$username','$password','$level')";


if (mysqli_query($conn, $queryuser)) {

    echo "Data berhasil ditambahkan";
 } else {
    echo "ERROR";
  } 



mysqli_close($conn);
