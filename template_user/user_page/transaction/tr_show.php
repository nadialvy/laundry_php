<?php 
    // session_start();
    
    // //jika tidak ada sesion login maka tendang user ke sign in
    // if( !isset($_SESSION["login"]) ){
    //   header("Location: ../sign_in/sign_in_user.php");
    //   exit;
    // }

    require 'tr_show_process.php';
    $datas = show("SELECT transaction.*, member.name AS member_name, user.name AS user_name FROM transaction
                   JOIN member ON member.id = transaction.id_member 
                   JOIN user ON user.id = transaction.id_user"); //memanggil function show didalam user show process

//     //nama member where id_member.transaction = id.member
//     include '../../../koneksi.php';
//     $query = "SELECT * FROM member
//               JOIN "
//     $data = mysqli_query($conn, $query);
// ?>
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
              <a href="transaction/tr_add.php" class="btn btn-sm btn-neutral">Add Data</a>
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
              <h3 class="mb-0">Transaction Data</h3>
            </div>
            <!-- Light table -->
            <form action=""></form>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr style="text-align: center;">
                    <th scope="col" class="sort">No.</th>
                    <th scope="col" class="sort">Member</th>
                    <th scope="col" class="sort">Date</th>
                    <th scope="col" class="sort">Deadline</th>
                    <th scope="col" class="sort">Status</th>
                    <th scope="col" class="sort">Paid</th>
                    <th scope="col" class="sort">User</th>
                    <th scope="col" class="sort">Action</th>
                  </tr>
                </thead>

                <tbody class="list">
                <?php $i = 1; ?>
                <?php foreach ($datas as $data) : ?>
                    <tr style="color: #333; text-align: center;">
                        <td><?= $i ?></td>
                        
                        <td><?= $data["member_name"]; ?></td>
                        <td><?= $data["date"]; ?></td>
                        <td><?= $data["deadline"]; ?></td>
                        <td><?= $data["status"]; ?></td>
                        <td><?= $data["paid"]; ?></td>
                        <td><?= $data["user_name"]; ?></td>
                        <td>
                            <a href="transaction/tr_update.php?id=<?= $data["id"]; ?>">
                                <button type="button" class="btn btn-sm btn-neutral">Update</button>
                            </a>
                            <a href="transaction/tr_delete.php?id=<?= $data["id"]; ?>" onclick="return confirm('Are you sure you want to delete this data?'); ">
                                <button type="button" class="btn btn-sm btn-neutral" >Delete</button>
                            </a> 
                            <a href="tr_detail_index.php?id=<?= $data["id"]; ?>">
                                <button type="button" class="btn btn-sm btn-neutral" >Detail</button>
                            </a>
                            <a target="_blank" href="transaction/cetak.php?id=<?= $data["id"]; ?>">
                                <button type="button" class="btn btn-sm btn-neutral" >Print Nota</button>
                            </a>
                        </td>
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
