<?php 
    // session_start();
    // //jika tidak ada sesion login maka tendang user ke sign in
    // if( !isset($_SESSION["login"]) ){
    //   header("Location: ../sign_in/sign_in.php");
    //   exit;
    // }

    require 'member_show_process.php';
    $members = show("SELECT * FROM member"); //memanggil function show didalam user show process
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
              <a href="member/member_add.php" class="btn btn-sm btn-neutral">Add Data</a>
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
              <h3 class="mb-0">Members Data</h3>
            </div>
            <!-- Light table -->
            <form action=""></form>
            <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr style="text-align: center;">
                    <th scope="col" class="sort">No.</th>
                    <th scope="col" class="sort">Name</th>
                    <th scope="col" class="sort">Address</th>
                    <th scope="col" class="sort">Gender</th>
                    <th scope="col" class="sort">Phone</th>
                    <th scope="col" class="sort">Action</th>
                  </tr>
                </thead>

                <tbody class="list">
                <?php $i = 1; ?>
                <?php foreach ($members as $member) : ?>
                    <tr style="color: #333; text-align: center;">
                        <td><?= $i ?></td>
                        <td><?= $member["name"]; ?></td>
                        <td><?= $member["address"]; ?></td>
                        <td><?= $member["gender"]; ?></td>
                        <td><?= $member["phone"]; ?></td>
                        <td>
                            <a href="member/member_update.php?id=<?= $member["id"]; ?>">
                                <button type="button" class="btn btn-sm btn-neutral">Update</button>
                            </a>
                            <a href="member/member_delete.php?id=<?= $member["id"]; ?>" onclick="return confirm('Are you sure you want to delete this data?'); ">
                                <button type="button" class="btn btn-sm btn-neutral" >Delete</button>
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
