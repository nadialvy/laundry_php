<?php 
    // session_start();
    
    // //jika tidak ada sesion login maka tendang user ke sign in
    // if( !isset($_SESSION["login"]) ){
    //   header("Location: ../sign_in/sign_in_user.php");
    //   exit;
    // }

    require 'tr_detail_show_process.php';
    
    $tr_id = $_GET["id"];

    $details = show("SELECT *, transaction_detail.id
                     FROM transaction_detail
                     JOIN packet ON packet.id = transaction_detail.packet_id 
                     WHERE transaction_id = '$tr_id' 
              "); 
    // var_dump($details); die();
?>
  <!-- Main content -->
  <div class="main-content" id="panel">
  <?php 
      include 'header.php';
    ?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="tr_detail/tr_detail_add.php" class="btn btn-sm btn-neutral">Add Data</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Transaction Detail Data</h3>
            </div>
            <!-- Light table -->
            <form action=""></form>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr style="text-align: center;">
                    <th scope="col" class="sort">No.</th>
                    <th scope="col" class="sort">Transaction Id</th>
                    <th scope="col" class="sort">Packet</th>
                    <th scope="col" class="sort">Price</th>
                    <th scope="col" class="sort">Quantity</th>
                    <th scope="col" class="sort">Subtotal</th>
                    <!-- <th scope="col" class="sort">Action</th> -->
                  </tr>
                </thead>

                <tbody class="list">
                <?php $i = 1; ?>
                <?php foreach ($details as $detail) : ?>
                    <tr style="color: #333; text-align: center;">
                        <td><?= $i ?></td>
                        <td><?= $detail["transaction_id"]; ?></td>
                        <td><?= $detail["type"]; ?></td>
                        <td>Rp.<?= $detail["price"]; ?>,-</td>
                        <td><?= $detail["qty"]; ?></td>
                        <td><?php
                              $price = $detail["price"];
                              $qty = $detail["qty"];
                              $subtotal = $price * $qty;
                              echo "Rp.$subtotal,-";
                            ?>
                        </td>
                        <!-- <td>
                            <a href="tr_detail/tr_detail_update.php?id= ?>">
                                <button type="button" class="btn btn-sm btn-neutral">Update</button>
                            </a>
                            <a href="tr_detail/tr_detail_delete.php?id= ?>" onclick="return confirm('Are you sure you want to delete this data?'); ">
                                <button type="button" class="btn btn-sm btn-neutral" >Delete</button>
                            </a>
                        </td> -->
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
