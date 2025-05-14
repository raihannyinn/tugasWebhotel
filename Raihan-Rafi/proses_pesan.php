<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    $nama_pengunjung = $_POST['nama_pengunjung'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $id_kamar = $_POST['id_kamar'];
    $cek_in = $_POST['cek_in'];
    $cek_out = $_POST['cek_out'];
    $total_harga = $_POST['total_harga'];

    // Insert data pengunjung
    $query_pengunjung = "INSERT INTO pengunjung (nama_pengunjung, alamat, no_tlp) 
                         VALUES ('$nama_pengunjung', '$alamat', '$no_tlp')";
   

        // Insert data pembayaran
        $query_pembayaran = "INSERT INTO pembayaran (id_kamar, harga, total_harga, cek_in, cek_out, no_kamar) 
                             VALUES ('$id_kamar', (SELECT harga FROM kamar WHERE id_kamar = $id_kamar), '$total_harga', '$cek_in', '$cek_out', 
                             (SELECT no_kamar FROM kamar WHERE id_kamar = $id_kamar))";

if (mysqli_query($conn, $querypengunjung)) {

    echo "Data berhasil ditambahkan";
 } else {
    echo "ERROR";
  } ;
?>