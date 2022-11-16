<?php
if(empty ($_SESSION['username_decafe'])){
    header('location:login');
}


    include "proses/connect.php";
    $query = mysqli_query($conn, " SELECT * FROM tb_user WHERE username ='$_SESSION[username_decafe]'" );
    $hasil = mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>DeCafe -Aplikasi Pemesanan Makanan dan Minuman Cafe</title>
</head>

<body style="height: 3000px;">
    <!--Header-->
    <?php include "header.php" ?>
    <!--End Header-->

    <div class="container-lg">
        <div class="row">
            <!--sidebaar-->
            <?php include "sidebar.php" ?>
            <!--end sidebaar-->

            <!--Content-->
            <?php
                include $page;
            ?>
            <!--End Content-->
        </div>
    </div>

    <div class="fixed-bottom text-center mb-2">
        Copyright 2022
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>