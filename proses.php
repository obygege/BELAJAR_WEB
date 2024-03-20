<?php
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'biodata_1'; 

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal = $_POST['asal'];
$hobby = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : '';
$deskripsi_diri = $_POST['komentar'];

$sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, asal, hobby, deskripsi_diri)
        VALUES ('$nim', '$nama', '$jenis_kelamin', '$asal', '$hobby', '$deskripsi_diri')";

if (mysqli_query($conn, $sql)) {
    header("Location: hasil.php"); 
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
