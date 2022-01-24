<?php 

    // session_start();
    
    // //jika tidak ada sesion login maka tendang user ke sign in
    // if( !isset($_SESSION["login"]) ){
    //   header("Location: ../sign_in/sign_in_user.php");
    //   exit;
    // }
    
    include '../../../koneksi.php'; //koneksi

    //ambil data
    $id = $_GET["id"];

    //query
    $query = "SELECT * FROM member
              WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Edit Member</title>
  <!-- Favicon -->
  <link rel="icon" href="../../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../../template_user/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../../template_user/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../../template_user/assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="../../../template_member/assets/css/ud-styles.css" />

  
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
                        <h3 class="mb-0">Edit Data</h3>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <form action="member_update_process.php" method="post" enctype="multipart/form-data" >
                        <div class="pl-lg-4">
                            <input name="id" type="hidden" value="<?= $data["id"]; ?>">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Name</label>
                                        <input name="name" id="input-name" class="form-control" value="<?= $data["name"]; ?>" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Address</label>
                                        <input name="address" id="input-address" class="form-control" value="<?= $data["address"]; ?>" type="text" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-gender">Gender</label>
                                        <select class="form-control" name='gender' value="<?= $data["gender"]; ?>" >
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-phone">Phone</label>
                                        <input name="phone" id="input-phone" class="form-control" value="<?= $data["phone"]; ?>" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ud-form-group">
                            <button type="submit" class="ud-main-btn w-100">Update Data</button>
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