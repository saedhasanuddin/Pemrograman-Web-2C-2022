<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #DA70D6;">
    <div class="container-lg">
        <img src="asset/img/logo1.png" width="70" height="65">
        <a class="navbar-brand" href=".">SIPAKOM MUTIARA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" style="background-color: #DA70D6;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Ingfo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item mx-1">
                        <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark'; ?>  " aria-current="page" href="home"><i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'berkas') ? 'active link-light' : 'link-dark'; ?>  " href="berkas"><i class="bi bi-card-text"></i> Berkas</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'kategori') ? 'active link-light' : 'link-dark'; ?>  " href="kategori"><i class="bi bi-calendar2-week"></i> kategori Berkas</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'laporan') ? 'active link-light' : 'link-dark'; ?>  " href="laporan"><i class="bi bi-bricks"></i> Laporan Berkas</a>
                    </li>
                    <?php if ($hasil['level'] == 1) { ?>
                        <li class="nav-item mx-1">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active link-light' : 'link-dark'; ?>  " href="user"><i class="bi bi-people"></i> User</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'situs') ? 'active link-light' : 'link-dark'; ?>  " href="situs"><i class="bi bi-card-list"></i> Situs</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item dropdown ps-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $hasil['username']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end m-3">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i></i> UbahPassword</a></li>
                            <li><a class="dropdown-item" href="logout"><i class="bi bi-door-open"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
</nav>



<!-- Modal Ubah-->
<div class="modal fade" id="ModalUbahPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Ubah Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="POST">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required value="<?php echo $_SESSION['sipakom']; ?>">
                                <label for="floatingInput">Username</label>
                                <div class="invalid-feedback">
                                    Masukkan Username.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-floating mb-3">
                                <input  type="password" class="form-control" id="floatingPassword"  name="passwordlama" required >
                                <label for="floatingInput">Password Lama</label>
                                <div class="invalid-feedback">
                                    Masukkan Password Lama.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" required class="form-control" id="floatingInput"  name="passwordbaru"  >
                                <label for="floatingInput">Password Baru</label>
                                <div class="invalid-feedback">
                                    Masukkan Password Baru.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"  name="repasswordbaru" required>
                                <label for="floatingInput"> Ulangi Password Baru</label>
                                <div class="invalid-feedback">
                                    Masukkan Ulangi Password Baru.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn" style="background-color: #DA70D6;" name="ubah_password_validate" value="1234">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir  Modal Ubah -->