<?php 

    if($_POST){
        //koneksi
        include '../../../koneksi.php';

        //ambil data
        $user_id = $_POST["id"];
        $name = $_POST["name"];
        $username =$_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        if(CRYPT_MD5 == 1) {
            $encrypted_pwd = crypt($password, '$12$hrd$reer');
        }

        //query
        $query = "UPDATE user SET
                  name = '$name',
                  username = '$username',
                  password = '$encrypted_pwd',
                  role = '$role'
                  WHERE id = '$user_id'; ";
        $update = mysqli_query($conn, $query);

        //cek
        if($update){
            echo "
                <script>
                    alert('Succes update data user');
                    document.location.href = '../user_index.php';
                </script>
            ";
        }else 
        {
            echo "
                <script>
                    alert('Failed to update data user');
                    document.location.href = 'user_update.php';
                </script>
            ";
        }

    }

?>