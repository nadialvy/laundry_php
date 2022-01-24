<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>CleanHolic</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/CleanHolic.svg" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">

            <?php if($_SESSION["role"] == 'admin'){ ?>
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Member Data</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="packet_index.php">
                  <i class="fas fa-cube" style="color: #11CDEF;"></i>
                  <span class="nav-link-text">Packet Detail</span>
                </a>
              </li>
            <?php } ?>

            <li class="nav-item">
              <a class="nav-link" href="transaction_index.php">
                <i class="fas fa-cash-register" style="color: #F3A4B5;"></i>
                <span class="nav-link-text">Transaction</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="tr_detail_index.php">
                <i class="fas fa-scroll" style="color: #3B92C3;"></i>
                <span class="nav-link-text">Transaction Detail</span>
              </a>
            </li> -->  
          </ul>
        </div>
      </div>
    </div>
  </nav>