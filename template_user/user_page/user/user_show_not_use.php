<?php 
    require 'user_show_process.php';
    $users = show("SELECT * FROM user"); //memanggil function show didalam user show process
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Data User</title>
    <link href="../css/user_show.css" rel="stylesheet">
    <link href="../css/global_style.css" rel="stylesheet">

  </head>

  <body>
    <h1 class="header">User Data</h1>

    <!-- <div class="container"> -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $user["name"]; ?></td>
                        <td><?= $user["username"]; ?></td>
                        <td><?= $user["password"]; ?></td>
                        <td><?= $user["role"]; ?></td>
                        <td>
                            <a href="user_update.php?id=<?= $user["id"]; ?>">
                                <button type="button" class="update">Update</button>
                            </a>
                            <a href="user_delete.php?id=<?= $user["id"]; ?>">
                                <button type="button" class="delete">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="cont-button">
            <a href="user_add.php"><button type="button" class="submit">Add Data</button></a>
        </div>
        <!-- </div> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>