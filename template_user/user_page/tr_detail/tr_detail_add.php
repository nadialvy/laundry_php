<?php 

    // session_start();
    
    // //jika tidak ada sesion login maka tendang user ke sign in
    // if( !isset($_SESSION["login"]) ){
    //   header("Location: ../sign_in/sign_in_user.php");
    //   exit;
    // }

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Add Trandaction Detail</title>
  <!-- Favicon -->
  <link rel="icon" href="../../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../../template_user/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../../template_user/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../../template_user/assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="../../../template/assets/css/ud-styles.css" />

  
</head>

<body style="background-color: #343A63;">
    <div class="main-content" id="panel">
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-8 order-xl-1" style="margin-top: 100px; margin-left: 200px;">
                <div class="card">
                    <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                        <h3 class="mb-0">Add Data</h3>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <form action="tr_detail_add_process.php" method="post" enctype="multipart/form-data" >

                        <div class="pl-lg-4">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-tr_id">Select Transaction Id</label>
                                        <select class="form-control" name='tr_id'>
                                        <option disabled selected>-- Select Transaction Id --</option>
                                            <?php
                                                include "../../../koneksi.php";  // Using database connection file here
                                                $records = mysqli_query($conn, "SELECT * FROM transaction");  // Use select query here 

                                                while($data = mysqli_fetch_array($records))
                                                {
                                                    echo "<option value='". $data['id'] ."'>" .$data['id'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-packet">Select Laundry Packet</label>
                                        <select class="form-control" name='packet'>
                                        <option disabled selected>-- Select Laundry Packet --</option>
                                            <?php
                                                include "../../../koneksi.php";  // Using database connection file here
                                                $records = mysqli_query($conn, "SELECT * FROM packet");  // Use select query here 

                                                while($data = mysqli_fetch_array($records))
                                                {
                                                    echo "<option value='". $data['id'] ."'>" .$data['type'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-qty">Quantity</label>
                                        <input name="qty" id="input-qty" class="form-control" type="number" required>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="ud-form-group">
                            <button type="submit" class="ud-main-btn w-100">Add Data</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../template_user/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../template_user/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../template_user/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../template_user/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../template_user/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../template_user/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>