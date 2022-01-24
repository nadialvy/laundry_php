<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Member Registration</title>

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
              <form class="ud-login-form" action="registration_process_member.php" method="post">
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
                    name="address"
                    placeholder="Address"
                    required
                  />
                </div>
                <div class="ud-form-group">
                  <select class="form-select" name='gender'>
                    <option selected="true" disabled="true" class="def">Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                  </select>
                </div>

                <div class="ud-form-group">
                  <input
                    type="text"
                    name="number"
                    placeholder="Phone Number"
                    required
                  />
                </div>

                <div class="ud-form-group">
                  <button type="submit" class="ud-main-btn w-100">Sign Up</button>
                </div>
              </form>
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
