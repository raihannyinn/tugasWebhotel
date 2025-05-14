<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar</title>
    <style>body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
}

label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
    color: #333;
}

input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    margin-top: 15px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}</style>
</head>
<body>
    <form action="proses_kamar.php" method="post">
        <label for="id_kamar">Id Kamar </label>
        <input type="text" id="id_kamar" name="id_kamar" placeholder="masukan id kamar"><br>

        <label for="no_kamar">No Kamar </label>
        <input type="text" id="no_kamar" name="no_kamar" placeholder="masukan no kamar"><br>

        <label for="type_kamar">Pilih Type</label>
         <select name="type_kamar" id="type_kamar">
         <option value="Tipe_A">Type A</option>
         <option value="Tipe_B">Type B</option>
         <option value="Tipe_C">Type C</option>
         </select>

        <label for="fasilitas">Fasilitas </label>
        <input type="text" id="fasilitas" name="fasilitas" placeholder="fasilitas kamar"><br>
        
        <label for="lantai">Lantai </label>
        <input type="text" id="lantai" name="lantai" placeholder="lantai kamar"><br>

        <button type="submit">Pesan </button>
       
</body>
</html>