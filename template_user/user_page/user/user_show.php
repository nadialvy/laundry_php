<?php 
    // session_start();
    
    // //jika tidak ada sesion login maka tendang user ke sign in
    // if( !isset($_SESSION["login"]) ){
    //   header("Location: ../sign_in/sign_in_user.php");
    //   exit;
    // }

    require 'user_show_process.php';
    $users = show("SELECT * FROM user"); //memanggil function show didalam user show process
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
              <a href="user/user_add.php" class="btn btn-sm btn-neutral">Add Data</a>
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
              <h3 class="mb-0">Users Data</h3>
            </div>
            <!-- Light table -->
            <form action=""></form>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort">No.</th>
                    <th scope="col" class="sort">Name</th>
                    <th scope="col" class="sort">Username</th>
                    <th scope="col" class="sort">Password</th>
                    <th scope="col" class="sort">Role</th>
                    <th scope="col" class="sort">Action</th>
                  </tr>
                </thead>

                <tbody class="list">
                <?php $i = 1; ?>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $user["name"]; ?></td>
                        <td><?= $user["username"]; ?></td>
                        <td><?= $user["password"]; ?></td>
                        <td><?= $user["role"]; ?></td>
                        <td>
                            <a href="user/user_update.php?id=<?= $user["id"]; ?>">
                                <button type="button" class="btn btn-sm btn-neutral">Update</button>
                            </a>
                            <a href="user/user_delete.php?id=<?= $user["id"]; ?>" onclick="return confirm('Are you sure you want to delete this data?'); ">
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
