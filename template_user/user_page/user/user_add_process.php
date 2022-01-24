<?php 

    if($_POST){
        include '../../../koneksi.php'; //koneksi

        //ambil data
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        if(CRYPT_MD5 == 1) {
            $encrypted_pwd = crypt($password, '$12$hrd$reer');
        }

        //query
        $query = "INSERT INTO user
                  VALUE('', '$name', '$username', '$encrypted_pwd', '$role')";
        $insert_data = mysqli_query($conn, $query);

        //cek
        if($insert_data){
            echo "
                <script>
                    alert('Succes add data user')
                    document.location.href = '../user_index.php';
                </script>
            ";
        }
        else {
            echo "
            <script>
                alert('Failed to add data customers')
                document.location.href = 'user_add.php';
            </script>
        ";
        }
    }

?>