<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="../assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="../assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="../admin.php">
                    <img src="../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">data siswa
                    </h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">SELAMAT DATANG </li>
                <li>
                    <a href="../admin.php">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">Data master</span>
                        <i class="typcn typcn-chevron-right menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../pages/registrasi.php">Registrasi</a></li>
                            <li class="nav-item"> <a class="nav-link" href="input_gelombang.php">Inupt glombang</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#pem" aria-expanded="false" aria-controls="pem">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">pendaftaran</span>
                        <i class="typcn typcn-chevron-right menu-arrow"></i>
                    </a>
                    <div class="collapse" id="pem">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="daftar_baru.php">Daftar baru</a></li>
                            <li class="nav-item"> <a class="nav-link" href="data_siswa.php">Data siswa</a></li>
                            <li class="nav-item"> <a class="nav-link" href="data_kaos.php">Data kaos</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#pen" aria-expanded="false" aria-controls="pen">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">pembayaran</span>
                        <i class="typcn typcn-chevron-right menu-arrow"></i>
                    </a>
                    <div class="collapse" id="pen">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="transaksi.php">Transaksi</a></li>
                            <li class="nav-item"> <a class="nav-link" href="data_pembayaran.php">Data pembayaran</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">logout</span>
                        <i class="typcn typcn-chevron-right menu-arrow"></i>
                    </a>
                </li>




            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">RAMA GANTENG</h6>
                                            <p class="user-subtitle">@rammzz</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> data siswa </h3>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                                        <thead style="background-color:grey;">
                                            <tr align="center">
                                                <th> No pendaftaran</th>
                                                <th> Tanggal</th>
                                                <th> nama </th>
                                                <th> asal sekolah </th>
                                                <th> jurusan </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include('../koneksi.php');
                                        $query = "SELECT * FROM data_siswa ORDER BY id ASC";
                                        $result = mysqli_query($koneksi, $query);
                                        if (!$result) {
                                            die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                                        }
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $edit_modal_id = "editModal" . $row['id']; // ID modal yang unik
                                        ?>
                                            <tbody style="background-color:black;">
                                                <td style="text-align: center;"><?php echo $row['no_pendaftaran']; ?></td>
                                                <td><?php echo $row['tanggal']; ?></td>
                                                <td><?php echo $row['nama_siswa']; ?></td>
                                                <td><?php echo $row['asal_sekolah']; ?></td>
                                                <td><?php echo $row['jurusan']; ?></td>
                                                <td style="text-align: center;">
                                                    <button type="button" class="btn btn-warning mdi mdi-tooltip-edit" data-toggle="modal" data-target="#<?php echo $edit_modal_id; ?>">EDIT</button>
                                                    <a title="hapus" class="btn btn-danger mdi mdi-delete" style="font-size: 12px;" href="proses/pros_hapus_siswa.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">HAPUS</a>&nbsp;
                                                </td>
                                            </tbody>
                                            <!-- Modal -->
                                            <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="background-color: black;">
                                                            <form class="needs-validation" action="proses/pros_edit_baru.php" method="post">
                                                                <div class="row">
                                                                    <div class="col-md-6  mb-3">
                                                                        <label for="firstName">no pendaftaran</label>
                                                                        <input type="text" class="form-control" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="" readonly>
                                                                        <div class="invalid-feedback">
                                                                            Valid first name is required.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="lastName">Tanggal</label>
                                                                        <input type="text" class="form-control" name="tanggal" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="">
                                                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                                                        <div class="invalid-feedback">
                                                                            Valid last name is required.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="lastName">namasiswa</label>
                                                                        <input type="text" class="form-control" name="nama_siswa" id="lastName" placeholder="" value="<?php echo $row['nama_siswa']; ?>" required="">
                                                                        <div class="invalid-feedback">
                                                                            Valid last name is required.
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="lastName">asal_sekolah</label>
                                                                        <input type="text" class="form-control" name="asal_sekolah" id="lastName" placeholder="" value="<?php echo $row['asal_sekolah']; ?>" required="">
                                                                        <div class="invalid-feedback">
                                                                            Valid last name is required.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3" <label for="country">jurusan</label>
                                                                        <select class="custom-select d-block w-100" name="jurusan" id="country" required="">
                                                                            <option value="">pilih...</option>
                                                                            <option <?php if ($row['jurusan'] == 'REKAYASA PERANGKAT LUNAK') echo 'selected'; ?>>REKAYASA PERANGKAT LUNAK</option>
                                                                            <option <?php if ($row['jurusan'] == 'AKUTANSI KEUANGAN DAN LEMBAGA') echo 'selected'; ?>>AKUNTANSI KEUANGAN DAN LEMBAGA</option>
                                                                            <option <?php if ($row['jurusan'] == 'MANANJEMEN PERKANTORAN') echo 'selected'; ?>>MANANJEMEN PERKANTORAN</option>
                                                                            <option <?php if ($row['jurusan'] == 'DESAIN KOMUNIKASI VISUAL') echo 'selected'; ?>>DESAIN KOMUNIKASI VISUAL</option>
                                                                            <option <?php if ($row['jurusan'] == 'PEMASARAN') echo 'selected'; ?>>PEMASARAN</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            please select a valid country.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            $no++;
                                        }
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TUTUP NAVBAR ISI -->
            </div>
                  
        </div>


    </div><!--End Row-->

    <!--End Row-->

    <!--End Dashboard Content-->

    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->

    </div>
    <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2018 Dashtreme Admin
            </div>
        </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">

            <p class="mb-0">Gaussion Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>

            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="../assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="../assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="../assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="../assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="../assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="../assets/js/index.js"></script>


</body>

</html>