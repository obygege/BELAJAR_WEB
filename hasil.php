<!DOCTYPE html>
<html>
<head>
    <title>Biodata Ku</title>
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
        <li><a href="homepage.php">HOMEPAGE</a></li>
    </ul>
</nav>  
<hr color=red>
<h2 align="center">BIODATA KU</h2>
    <table>
        <thead>
            <tr>
                <td>NPM : </td>
                <td>Nama : </td>
                <td>Jenis Kelamin : </td>
                <td>Asal : </td>
                <td>Hobby : </td>
                <td>Deskripsi Diri : </td>
            </tr>
        </thead>
        <tbody>
            <?php
            $host = 'localhost'; 
            $username = 'root'; 
            $password = ''; 
            $database = 'biodata_1'; 

            $conn = mysqli_connect($host, $username, $password, $database);

            if (!$conn) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM mahasiswa";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><br>" . $row['nim'] . "</td>";
                    echo "<td><br>" . $row['nama'] . "</td>";
                    echo "<td><br>" . $row['jenis_kelamin'] . "</td>";
                    echo "<td><br>" . $row['asal'] . "</td>";
                    echo "<td><br>" . $row['hobby'] . "</td>";
                    echo "<td><br>" . $row['deskripsi_diri'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>
