<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="admin.php">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">SELAMAT DATANG RAMA</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">anda sebgai admin </li>
      <li>
        <a href="admin.php">
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
                <li class="nav-item"> <a class="nav-link" href="pages/registrasi.php">registrasi</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/input_gelombang.php">Inupt glombang</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="pages/daftar_baru.php">Daftar baru</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/data_siswa.php">Data siswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/data_kaos.php">Data kaos</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="pages/transaksi.php">transaksi</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/data_pembayaran.php">Data pembayaran</a></li>  
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
    <?php
    include "koneksi.php";
    $query = "SELECT COUNT(*) AS total_siswa FROM data_siswa";
    $result = mysqli_query($koneksi,$query);

    if (!$result){
      die("Query error.".mysqli_error($koneksi));
    }
    $row = mysqli_fetch_assoc($result);
    $total_siswa = $row['total_siswa'];

    $koneksi->close();
    ?>
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><?php echo $row['total_siswa'];?><span class="float-right"><i class></i></span></h5>
                    <div class style="height:3px;">
                       
                    </div>
                  <p class="mb-0 text-white small-font">jumlah pendaftaran: <span class="float-right"> <i class></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">5<span class="float-right"><i class></i></span></h5>
                    <div class style="height:3px;">
                       
                    </div>
                  <p class="mb-0 text-white small-font">Total jurusan:   <span class="float-right"><i class></i></span></p>
                </div>
            </div>
           
            </div>
        </div>
        <?php
        include 'koneksi.php';
        $query_tanggal = "SELECT tanggal FROM data_bayar ORDER BY tanggal DESC LIMIT 1";
        $result_tanggal = mysqli_query($koneksi,$query_tanggal);
        if(!$result_tanggal){
          die("Query error:".mysqli_error($koneksi));
        }
        $row_tanggal = mysqli_fetch_assoc($result_tanggal);
        $tanggal = $row_tanggal['tanggal'];
        $query = "SELECT SUM(bayar-kembalian)AS total_income FROM data_bayar WHERE tanggal = '$tanggal'";
        $result = mysqli_query($koneksi,$query);

        if(!$result){
          die("Query error:".mysqli_error($koneksi));
        }
        $row = mysqli_fetch_assoc($result);
        $total_income = $row['total_income'];

        ?>
        <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">RP.<?php echo number_format($total_income,0,',','.                 ');?><span class="float-right"><i class></i></span></h5>
                    <div class style="height:3px;">
                       
                    </div>
                  <p class="mb-0 text-white small-font">income harian   <span class="float-right"><i class></i></span></p>
                </div>
            </div>
           
            </div>
        </div>
        
        <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                <?php
          include 'koneksi.php';

          $query = "SELECT SUM(bayar-kembalian)AS total_pengurangan FROM data_bayar";
          $result = mysqli_query($koneksi,$query);
          if(!$result){
            die("Query error.".mysqli_error($koneksi));
          }
          $row = mysqli_fetch_assoc($result);
          $total_pengurangan = $row['total_pengurangan'];
          $koneksi->close();
          ?>
                 
                    <div class style="height:3px;">
                       
                    </div>
                  <p class="mb-0 text-white small-font">Total Pendapatan <h5>RP.<?php echo $row['total_pengurangan'];?> </h5> <span class="float-right"><i class></i></span></p>
                </div>
            </div>
       
	
	
       
	  
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
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>