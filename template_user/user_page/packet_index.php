
<?php 
  session_start();
  //jika tidak ada sesion login maka tendang user ke sign in
  if( !isset($_SESSION["login"])){
    header("Location: sign_in/sign_in.php");
    exit;
  }

  //  check role
  if($_SESSION["role"] != "admin" ){
    header("Location: transaction_index.php");
    exit;
  }

 include 'sidenav.php';
?>

  
  <!-- Main content -->
  <?php 
    include 'packet/packet_show.php';
  
  ?>
  <!-- Argon Scripts -->
  <!-- Core -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>


