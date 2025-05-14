<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
</head>
<body>
<h2>Pesan</h2>    
<form action="proses_pesan.php" method="post">
<label>Nama: </label><input type="text" name="nama_pengunjung" required><br>
<label>Alamat: </label><input type="text" name="alamat"  required><br>
<label>No tlp: </label><input type="text" name="no_tlp" required><br>
<label>Id kamar: </label><input type="text" name="id_kamar" required><br>
<label>cek in: </label><input type="date" name="cek_in" required><br>
<label>cek out: </label><input type="date" name="cek_out" required><br>
<label>total harga</label><input type="text" name="total_harga" required><br>
<button type="submit">Pesan</button>
</form>



</body>
</html>





