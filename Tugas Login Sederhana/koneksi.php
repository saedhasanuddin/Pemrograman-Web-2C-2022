<?php
$username =$_POST['username'];
$password =$_POST['password'];
$conn = mysqli_connect("localhost","root","","db_web2022");
$hasil = mysqli_query($conn,"select*from login where username = '$username' and password = '$password'");
$jumlah = mysqli_num_rows($hasil);
if ($jumlah ){
    echo "selamat anda berhasil login";
}else{
    echo "anda gagal login";
}

?>

