<?php
include 'koneksi.php';

$id_pengunjung =$_POST ['id_pengunjung'];
$nama_pengunjung =$_POST ['nama_pengunjung'];
$alamat =$_POST ['alamat'];
$no_tlp =$_POST ['no_tlp'];


$querypengunjung = "INSERT INTO pengunjung (id_pengunjung, nama_pengunjung, alamat, no_tlp) 
VALUES ('$id_pengunjung','$nama_pengunjung','$alamat','$no_tlp')";


if (mysqli_query($conn, $querypengunjung)) {

    echo "Data berhasil ditambahkan";
 } else {
    echo "ERROR";
  } ;



mysqli_close($conn);

?>
