<?php
include 'koneksi.php';

$id_kamar =$_POST ['id_kamar'];
$no_kamar =$_POST ['no_kamar'];
$type_kamar =$_POST ['type_kamar'];
$fasilitas =$_POST ['fasilitas'];
$lantai =$_POST ['lantai'];


$querykamar = "INSERT INTO kamar (id_kamar, no_kamar, type_kamar, fasilitas, lantai) 
VALUES ('$id_kamar','$no_kamar','$type_kamar','$fasilitas','$lantai')";


if (mysqli_query($conn, $querykamar)) {

    echo "Data berhasil ditambahkan";
 } else {
    echo "ERROR";
  } 



mysqli_close($conn);

?>
