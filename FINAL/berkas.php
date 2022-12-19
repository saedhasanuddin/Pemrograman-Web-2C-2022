<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM  berkas");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="container-lg">
    <div class="row">
        <div class="col-lg-12 mt-3 rounded">
            <div class="card text-center">
                <div class="card-header">
                    HALAMAN PENGGUNA
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-lg-start">
                            <button class="btn" style="background-color: #DA70D6;" data-bs-toggle="modal" data-bs-target="#ModalTambahPengguna">Tambah Pengguna</button>
                        </div>
                        
                    </div>
                 

                    <?php

                    foreach ($result as $row) {
                    ?>
                     

                     



                       

                    <?php
                    }
                    if (empty($result)) {
                        echo "Data Pengguna tidak ada";
                    } else {
                    ?>
                        <div class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">
        <h4 class="my-0 fw-normal">Free</h4>
    </div>
    <div class="card-body">
        <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
            <li><?php echo $row['nama_berkas'] ?></li>
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
    </div>
</div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>