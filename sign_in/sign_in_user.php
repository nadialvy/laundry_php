<?php 
  session_start();

  //jika sudah login maka dilempar ke index
  // if( isset($_SESSION["login"]) ) {
  //   header("Location: ../template_user/index.php");
  //   exit;
  // }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Sign In</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="../template/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../template/assets/css/animate.css" />
    <link rel="stylesheet" href="../template/assets/css/lineicons.css" />
    <link rel="stylesheet" href="../template/assets/css/ud-styles.css" />

    <style>
        .form-select{
          padding: 15px 15px 15px 20px;
          border: 2px solid #DDDDDD;
        }

        .form-select{
          color: #757575 !important;
        }

        .registration{
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
                <img src="../template/assets/images/logo/CleanHolic.svg" alt="logo" />
              </div>
              <form class="ud-login-form" action="sign_in_user_process.php" method="post">
                <div class="ud-form-group">
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
                  <button type="submit" class="ud-main-btn w-100">Sign In</button>
                </div>
              </form>

              <p>Dont have account? <a href="../registration/registration_user.php" class="registration">Register Now!</a> </p>

            </div>
          </div>
        </div>
      </div>
    </section>

    
    <!-- ====== All Javascript Files ====== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

        




  </body>
</html>
