
<?php 
  session_start();
  //jika tidak ada sesion login maka tendang user ke sign in
  if( !isset($_SESSION["login"]) ){
    header("Location: sign_in/sign_in.php");
    exit;
  }

  if($_SESSION["role"] == "admin"){
    
  }
 include 'sidenav.php';
?>
  
  <!-- Main content -->
  <?php 
    include 'transaction/tr_show.php';
  
  ?>
  <!-- Argon Scripts -->
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


