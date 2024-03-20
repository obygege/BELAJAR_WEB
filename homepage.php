<!DOCTYPE html>
<html>
<head>
    <title>COVER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<h1>WEBSITE PRIBADI</h1> 
<hr color=red>
</center>
<nav>
    <ul class="nav-links">
        <li><a href="index.php">HOME</a></li>
        <li><a href="#">HOMEPAGE</a></li>
    </ul>
</nav>  
<hr color=red>
<h2 align="center">BIODATA KU</h2>
<form method="post" action="proses.php" id="biodataForm">
    NIM: <input type="text" name="nim" value="NIM"> <br> 
    NAMA: <input type="text" name="nama" value="NAMA"> <br> 
    JENIS KELAMIN :
    <input type="radio" name="jenis_kelamin" value="LAKI - LAKI" checked=""> Laki - Laki
    <input type="radio" name="jenis_kelamin" value="PEREMPUAN"> Perempuan <br>
    <br> ASAL:
    <select name="asal">
        <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
        <option value="SULAWESI UTARA">SULAWESI UTARA</option>
        <option value="SUMATERA BARAT">SUMATERA BARAT</option>
    </select> <br>
    HOBBY :
    <input type="checkbox" name="hobby[]" value="FUTSAL"> FUTSAL
    <input type="checkbox" name="hobby[]" value="MEMBACA"> MEMBACA
    <input type="checkbox" name="hobby[]" value="BERENANG"> BERENANG <br> 
    <br> DESKRIPSI DIRI: <br>
    <textarea name="deskripsi_diri" rows="5" cols="20"> Ketikan deskripsi anda disini</textarea> <br>

    <input type="submit" value="OK">
    <input type="reset" value="RESET" id="resetButton">
</form>

<script src="script.js"></script>
</body>
</html>
