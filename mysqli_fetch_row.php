<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Koneksi database dengan mysqli_fetch_row</h1>
    <?php
        $conn = mysqli_connect ("localhost", "root", "", "db_web2022")
        or die ("koneksi gagal");
        $hasil = mysqli_query($conn, "select * from liga");
        while ($row = mysqli_fetch_row($hasil)){
            echo "Liga " . $row[1]; 
            echo "mempunyai " . $row[2]; 
            echo " wakil di liga champion <br>";
        }
    ?>
</body>
</html>

