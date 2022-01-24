<?php 
    require 'packet_show_process.php';
    $packets = show("SELECT * FROM packet");
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
              <a href="packet/packet_add.php" class="btn btn-sm btn-neutral">Add Data</a>
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
              <h3 class="mb-0">Packets Information</h3>
            </div>
            <!-- Light table -->
            <form action=""></form>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr class="mb-0" style="text-align: center;">
                    <th scope="col" class="sort">No.</th>
                    <th scope="col" class="sort">Type</th>
                    <th scope="col" class="sort">Price</th>
                    <th scope="col" class="sort">Action</th>
                  </tr>
                </thead>

                <tbody class="list">
                <?php $i = 1; ?>
                <?php foreach ($packets as $packet) : ?>
                    <tr style="color: #333; text-align: center;">
                        <td><?= $i ?></td>
                        <td><?= $packet["type"]; ?></td>
                        <td><?= $packet["price"]; ?></td>
                        <td>
                            <a href="packet/packet_update.php?id=<?= $packet["id"]; ?>">
                                <button type="button" class="btn btn-sm btn-neutral">Update</button>
                            </a>
                            <a href="packet/packet_delete.php?id=<?= $packet["id"]; ?>" onclick="return confirm('Are you sure you want to delete this data?'); ">
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
