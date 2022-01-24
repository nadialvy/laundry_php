<?php 
  session_start();
  //jika sudah login maka tidak boleh login kembali
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
    <title>Sign In</title>

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

        .registration{
          font-weight: 800;
        }

        .showPass{
          display: inline-block;
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
              <form class="ud-login-form" action="sign_in_process.php" method="post">
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
                    id="InputPassword"
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                  />
                </div>
                  <!-- <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span class="text-muted">Remember me</span>
                    </label>
                  </div>
                  <div>
                    <input type="checkbox" id="pass_toggle" onclick="ShowOrHide()" style="display: inline;">
                    <script>
                      function ShowOrHide() {
                        var x = document.getElementById("InputPassword");
                        if (x.type === "password") {
                          x.type = "text";
                        } else {
                          x.type = "password";
                        }
                      }
                    </script>
                    <label for="pass_toggle">Show Password</label>
                  </div>
                </div> -->
                
                <div class="ud-form-group">
                  <button type="submit" class="ud-main-btn w-100">Sign In</button>
                </div>
              </form>

              <p>Dont have account? <a href="../sign_up/sign_up.php" class="registration">Register Now!</a> </p>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ====== All Javascript Files ====== -->
    <script src="../assets-login/js/bootstrap.bundle.min.js"></script>
    <script src="../assets-login/js/wow.min.js"></script>
    <script src="../assets-login/js/main.js"></script>
  </body>
</html>
