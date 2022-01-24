<?php 

    // session_start();
    
    // //jika tidak ada sesion login maka tendang user ke sign in
    // if( !isset($_SESSION["login"]) ){
    //   header("Location: ../sign_in/sign_in_user.php");
    //   exit;
    // }
    
    if($_GET){
        include '../../../koneksi.php';

        $id = $_GET["id"];

        $query = "SELECT * FROM transaction
                  WHERE id = '$id' ";
        $datas = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($datas);
        
    }
   

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Edit Transaction</title>
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
                    <form action="tr_update_process.php" method="post" enctype="multipart/form-data" >
                        <div class="pl-lg-4">

                            <input name="id" type="hidden" value="<?= $data["id"]; ?>">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-member_name">Select member</label>
                                        <select class="form-control" name='member_name'>
                                            <?php
                                                include "../../../koneksi.php";  // Using database connection file here
                                                $records = mysqli_query($conn, "SELECT * FROM member");  // Use select query here
                                                while($member = mysqli_fetch_array($records))
                                                {
                                                    $selected = "";
                                                    if($member['id'] == $data['id_member']){
                                                        $selected = 'selected';
                                                    }
                                                    echo "<option value='". $member['id'] ."' ".$selected.">" .$member['name'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-date">Date</label>
                                        <input value="<?= $data["date"]; ?>" name="date" id="input-date" class="form-control" type="date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-deadline">Deadline</label>
                                        <input value="<?= $data["deadline"]; ?>" name="deadline" id="input-deadline" class="form-control" type="date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-payDate">Pay Date</label>
                                        <input value="<?= $data["pay_date"]; ?>" name="payDate" id="input-payDate" class="form-control" type="date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-status">Status</label>
                                        <select class="form-control" name='status'>
                                            <?php
                                                include "../../../koneksi.php";  
                                                $recordsStatus = mysqli_query($conn, "SELECT status FROM transaction WHERE id = '$id'");  
                                                $status = mysqli_fetch_array($recordsStatus);

                                                $selectedStats = "";
                                                if($status['status'] == $data['id_member']){
                                                    $selectedStats = 'selected';
                                                }
                                                echo "<option value='". $status['status'] ."' ".$selectedStats.">" .$status['status'] ."</option>"; 	
                                            ?> 
                                            <option value="new">New</option>
                                            <option value="process">Process</option>
                                            <option value="done">Done</option>
                                            <option value="taken">Taken</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-paid">Paid</label>
                                        <select class="form-control" name='paid' value="<?= $data["paid"]; ?>">
                                            <?php
                                                include "../../../koneksi.php";  
                                                $recordsPaid = mysqli_query($conn, "SELECT paid FROM transaction WHERE id = '$id'");  
                                                $paid = mysqli_fetch_array($recordsPaid);

                                                $selectedPaid = "";
                                                if($paid['paid'] == $data['id_member']){
                                                    $selectedPaid= 'selected';
                                                }
                                                echo "<option value='". $paid['paid'] ."' ".$selectedPaid.">" .$paid['paid'] ."</option>"; 	
                                            ?>
                                            <option value="paid">Paid</option>
                                            <option value="not yet">Not yet</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-user_name">Select User</label>
                                        <select class="form-control" name='user_name'>
                                            <?php
                                                include "../../../koneksi.php";  // Using database connection file here
                                                $recordsUser = mysqli_query($conn, "SELECT * FROM user");  // Use select query here
                                            
                                                while($user = mysqli_fetch_assoc($recordsUser))
                                                {   
                                                    $selectedUser = "";
                                                    if($user['id'] == $data['id_user']){
                                                        $selectedUser = 'selected';
                                                    }
                                                    echo "<option value='". $user['id'] ."' ".$selectedUser.">" .$user['name'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        <div class="ud-form-group">
                            <button type="submit" class="ud-main-btn w-100">Edit Data</button>
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