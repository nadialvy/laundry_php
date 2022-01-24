<?php 
    //koneksi
    include '../koneksi.php';

    //get data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $password_confirm = mysqli_real_escape_string($conn, $_POST["password_confirm"]);
    $role = $_POST["role"];
    
    // Check username is already taken or not
    $queryCheck = "SELECT username FROM user WHERE username = '$username'";
    $check = mysqli_num_rows(mysqli_query($conn, $queryCheck));

    if ($check > 0){
        echo "
            <script>
                alert('The username is already taken, try again!');
                document.location.href = 'registration_user.php';
            </script>
        ";
        return false;
    }  

    //check password is match or not
    if($_POST["password"] !== $_POST["password_confirm"]){
        echo "
            <script>
                alert('Password and Password Confirmation did not match');
                document.location.href = 'registration.php';
            </script>
        ";
        return false;
    }

    //encrypt the password
    $encrypted_pwd = password_hash($password, PASSWORD_DEFAULT);
    
    //query and insert data into table
    $queryUser = "INSERT INTO user
                  VALUE('', '$name', '$username', '$encrypted_pwd', '$role')";
    $insertUser = mysqli_query($conn, $queryUser);

    //cek
    if($insertUser){
        echo "
            <script>
                alert('Success to sign up');
                document.location.href = '../sign_in/sign_in_user.php';
            </script>
        ";
    }
    else {
        echo "
        <script>
            alert('Failed to sign up')
            document.location.href = 'registration.php';
        </script>
    ";
    }



?>