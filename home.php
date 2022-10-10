<?php
include "session";
include "koneksi";
?>

<p align="center">

halo, selamat datang <b> <?php echo $_SESSION['username'];?></b>
silahkan <a href="logout.php"> <b> logout </b> untuk keluar dari aplikasi

</a>
</p>