<?php 
    if($_POST){
        //koneksi
        include '../../../koneksi.php';
        // var_dump($_POST["remember"]); die();

        if(isset($_POST["remember"])){
            echo "Hi"; die();
        }
        //get data
        $username = $_POST["username"];
        $password = $_POST["password"];

        //check username
        $queryUsn = "SELECT * FROM user
                     WHERE username = '$username' ";
        $result = mysqli_query($conn, $queryUsn); //bentuk object

        if( mysqli_num_rows($result) > 0 ){

            //check pass
            $data = mysqli_fetch_assoc($result);
            $checkPass = password_verify($password, $data["password"]);
            if( $checkPass ){
                
                //set session
                session_start();
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $data["role"];
    
                header("Location: ../index.php");
            } else {
                echo "
                <script>
                    alert('Password is incorrect')
                    document.location.href = 'sign_in.php';
                </script>
            ";
            } 

        } else {
            echo "
            <script>
                alert('Username is incorrect')
                document.location.href = 'sign_in.php';
            </script>
        ";
        }
    }

?>