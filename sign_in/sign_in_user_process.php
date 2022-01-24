<?php 
session_start();

    if($_POST){
    
        //koneksi
        include '../koneksi.php';

        //get data
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        
        //cek data apakah ada di database
        $query = "SELECT * FROM user
                  WHERE username='$username' ";

        $result = mysqli_query($conn, $query);
        
        if( mysqli_num_rows($result) > 0){
            //check password
            $data = mysqli_fetch_assoc($result);
            if( password_verify($password, $data["password"]) ){
                //set session
                // $_SESSION["login"] = true;
                header("Location: ../template_user/index.php");
            }
        } else {
            echo "
                <script>
                    alert('Username or password is incorrect')
                    document.location.href = 'sign_in_user.php';
                </script>
            ";
        }
    } else {
        echo "
                <script>
                    document.location.href = 'sign_in_user.php';
                </script>
            ";
    }

    if($_SESSION['user']['role'] == 'admin')
    {
        <button></button>
    }

?>

