<?php 
    if($_POST){
        //koneksi
        include '../../../koneksi.php';

        //get data
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password_confirm = $_POST["password_confirm"];
        $role = $_POST["role"];

        //query
        $queryUsn = "SELECT username FROM user
                     WHERE username = '$username' ";
        $resultUsn = mysqli_query($conn, $queryUsn);
        $dataUsn = mysqli_num_rows($resultUsn);

        if($dataUsn > 0){
            echo 
                "<script>
                    alert('Username already taken, choose another username');
                    document.location.href = 'sign_up.php';
                </script>";
            return false;
        }

        //check password
        if($password !== $password_confirm){
            echo 
                "<script>
                    alert('Password and password confirmation are not matched, try again');
                    document.location.href = 'sign_up.php';
                </script>";
            return false;
        }

        //enkripsi password
        $pass_encrypted = password_hash($password, PASSWORD_DEFAULT);

        //insert data
        $querySignUp = "INSERT INTO user
                        VALUE ('', '$name', '$username', '$pass_encrypted', '$role') ";
        $insert = mysqli_query($conn, $querySignUp);

        if($insert){
            echo 
                "<script>
                    alert('Registration success');
                    document.location.href = '../sign_in/sign_in.php';
                </script>";
        }else {
            echo    
                "<script>
                    alert('There is something wrong, try again');
                    document.location.href = 'sign_up.php';
                </script>";
        }

        
    }
?>