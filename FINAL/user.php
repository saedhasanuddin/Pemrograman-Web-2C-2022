<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM  tb_user");
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
                    <!-- Modal Tambah Penggguna -->
                    <div class="modal fade" id="ModalTambahPengguna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengguna Baru</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" required>
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Nama.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input required type="number" class="form-control" id="floatingInput" placeholder="1920875xxxx" name="nik">
                                                    <label for="floatingInput">NIK</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan NIK.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-floating mb-3">
                                                    <input  required type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
                                                    <label for="floatingInput">Username</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select required class="form-select" aria-label="Default select example" name="level">
                                                        <option selected hidden value="">Pilih Level Pengguna</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Aparat</option>
                                                        <option value="3">Penduduk</option>
                                                    </select>
                                                    <label for="floatingInput">Level Pengguna</label>
                                                    <div class="invalid-feedback">
                                                        Pilih Level.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp">
                                                    <label for="floatingInput">Nomor HP</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" id="floatingInput" placeholder="password" disabled value="12345" name="password">
                                                    <label for="floatingInput">Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control" name="alamat" id="" style="height: 100px;"></textarea>
                                            <label for="floatingInput">Alamat</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn" style="background-color: #DA70D6;" name="input_user_validate" value="1234">Simpan</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Akhir  Tambah Penggguna -->


                    <?php

                    foreach ($result as $row) {
                    ?>
                        <!-- Modal Detail-->
                        <div class="modal fade" id="ModalDetail<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Data Pengguna</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" value="<?php echo $row['nama']; ?>">
                                                        <label for="floatingInput">Nama</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="number" class="form-control" id="floatingInput" placeholder="1920875xxxx" name="nik" value="<?php echo $row['nik']; ?>">
                                                        <label for="floatingInput">NIK</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan NIK.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?php echo $row['username']; ?>">
                                                        <label for="floatingInput">Username</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <select disabled class="form-select" aria-label="Default select example" name="level" id="">
                                                            <?php $data = array('admin', 'aparat', 'penduduk');
                                                            foreach ($data as $key => $value) {
                                                                if ($row['level'] == $key + 1) {
                                                                    echo "<option selected value= '$key'>$value</option>";
                                                                } else {
                                                                    echo "<option value= '$key'>$value</option>";
                                                                }
                                                            } ?>
                                                        </select>
                                                        <label for="floatingInput">Level Pengguna</label>
                                                        <div class="invalid-feedback">
                                                            Pilih Level.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" value="<?php echo $row['nohp']; ?>">
                                                        <label for="floatingInput">Nomor HP</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="password" class="form-control" id="floatingInput" placeholder="password" disabled value="12345" name="password" value="<?php echo $row['password']; ?>">
                                                        <label for="floatingInput">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                                <textarea disabled class="form-control" name="alamat" id="" style="height: 100px;"><?php echo $row['alamat']; ?></textarea>
                                                <label for="floatingInput">Alamat</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir  Modal Detail -->


                        <!-- Modal Ubah-->
                        <div class="modal fade" id="ModalUbah<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Ubah Data Pengguna</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_edit_user.php" method="POST">
                                            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" required value="<?php echo $row['nama']; ?>">
                                                        <label for="floatingInput">Nama</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingInput" placeholder="1920875xxxx" name="nik" required value="<?php echo $row['nik']; ?>">
                                                        <label for="floatingInput">NIK</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan NIK.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="form-floating mb-3">
                                                        <input <?php echo($row['username'] == $_SESSION['sipakom']) ? 'disabled' : '' ; ?> type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required value="<?php echo $row['username']; ?>">
                                                        <label for="floatingInput">Username</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example" name="level" id="">
                                                            <?php $data = array('admin', 'aparat', 'penduduk');
                                                            foreach ($data as $key => $value) {
                                                                if ($row['level'] == $key + 1) {
                                                                    echo "<option selected value=" . ($key + 1) . ">$value</option>";
                                                                } else {
                                                                    echo "<option value= " . ($key + 1) . ">$value</option>";
                                                                }
                                                            } ?>
                                                            <label for="floatingInput"></label>
                                                            <div class="invalid-feedback">

                                                            </div>
                                                        </select>
                                                        <label for="floatingInput">Level Pengguna</label>
                                                        <div class="invalid-feedback">
                                                            Pilih Level.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" value="<?php echo $row['nohp']; ?>">
                                                        <label for="floatingInput">Nomor HP</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="password" class="form-control" id="floatingInput" placeholder="password" disabled value="12345" name="password" value="<?php echo $row['password']; ?>">
                                                        <label for="floatingInput">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                                <textarea class="form-control" name="alamat" id="" style="height: 100px;"><?php echo $row['alamat']; ?></textarea>
                                                <label for="floatingInput">Alamat</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn" style="background-color: #DA70D6;" name="input_user_validate" value="1234">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir  Modal Ubah -->



                        <!-- Modal Hapus-->
                        <div class="modal fade" id="ModalHapus<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal- modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Hapus Data Pengguna</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_hapus_user.php" method="POST">
                                            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                            <div class="col-lg-12">
                                                <?php
                                                if ($row['username'] == $_SESSION['sipakom']) {
                                                    echo "<div class='alert alert-danger'>Anda tidak dapat menghapus akun sendiri</div>";
                                                } else {
                                                    echo "Apakah anda yakin ingin menghapus User <b>$row[username],</b>";
                                                }
                                                ?>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-danger" name="input_user_validate" value="1234" <?php echo($row['username'] == $_SESSION['sipakom']) ? 'disabled' : '' ; ?>>Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir  Modal Hapus -->




                    <?php
                    }
                    if (empty($result)) {
                        echo "Data Pengguna tidak ada";
                    } else {
                    ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($result as $row) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td><?php echo $row['nama'] ?></td>
                                            <td><?php echo $row['nik'] ?></td>
                                            <td><?php echo $row['username'] ?></td>
                                            <td><?php
                                                if ($row['level'] == 1) {
                                                    echo "Admin";
                                                } elseif ($row['level'] == 2) {
                                                    echo "aparat";
                                                } elseif ($row['level'] == 3) {
                                                    echo "penduduk";
                                                } ?></td>
                                            <td><?php echo $row['nohp'] ?></td>
                                            <td class=" row-d-flex">
                                                <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDetail<?php echo $row['id'] ?>"><i class="bi bi-eye "></i></button>
                                                <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalUbah<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></i></button>
                                                <button class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#ModalHapus<?php echo $row['id'] ?>"><i class="bi bi-trash3"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>