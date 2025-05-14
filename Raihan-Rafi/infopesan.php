<?php
include 'koneksi.php';

$query = $conn->query('SELECT * FROM kamar');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }

        td {
            color: #333;
        }
    </style>
</head>

<body>
    <table border='1'>
        <tr>
            <th>Id kamar</th>
            <th>No kamar</th>
            <th>type kamar</th>
            <th>fasilitas</th>
            <th>lantai</th>
        </tr>
        <?php while ($row = $query->fetch_assoc()) : ?>
            <tr>
                <td><?= $row['id_kamar'] ?></td>
                <td><?= $row['no_kamar'] ?></td>
                <td><?= $row['type_kamar'] ?></td>
                <td><?= $row['fasilitas'] ?></td>
                <td><?= $row['lantai'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>