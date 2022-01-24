<?php 
    session_start();

    //jika sudah login maka tidak boleh akses ke halaman sign up
    if( isset($_SESSION["login"]) ){
      header("Location: ../index.php");
      exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Registration</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="../../assets-login/images/favicon.svg"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="../../assets-login/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets-login/css/animate.css" />
    <link rel="stylesheet" href="../../assets-login/css/lineicons.css" />
    <link rel="stylesheet" href="../../assets-login/css/ud-styles.css" />


    <style>
        .form-select{
          padding: 15px 15px 15px 20px;
          border: 2px solid #DDDDDD;
        }

        .form-select{
          color: #757575 !important;
        }

        .signIn{
          font-weight: 800;
        }
    </style>
  </head>
  <body>
    <!-- ====== Login Start ====== -->
    <section class="ud-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-login-wrapper">
              <div class="ud-login-logo">
                <img src="../../assets/CHPurple.svg" alt="logo" />
              </div>
              <form class="ud-login-form" action="sign_up_process.php" method="post">
                <div class="ud-form-group">
                  <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    required
                  />
                </div>
                <div class="ud-form-group">
                  <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    required
                  />
                </div>
                <div class="ud-form-group">
                  <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                  />
                </div>
                <div class="ud-form-group">
                  <input
                    type="password"
                    name="password_confirm"
                    placeholder="Password Confirmation"
                    required
                  />
                </div>
                <div class="ud-form-group">
                  <select class="form-select" name='role'>
                    <option selected="true" disabled="true" class="def">Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Cashier">Cashier</option>
                  </select>
                </div>
                <div class="ud-form-group">
                  <button type="submit" class="ud-main-btn w-100">Sign Up</button>
                </div>
              </form>

              <p>Already have account? <a href="../sign_in/sign_in.php" class="signIn">Sign In!</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Login End ====== -->

    <!-- ====== Footer Start ====== -->

    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
