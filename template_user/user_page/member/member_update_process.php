<?php 

    if($_POST){
        //koneksi
        include '../../../koneksi.php';

        //get data
        $id = $_POST["id"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];

        //query
        $query = "UPDATE member SET 
                  name = '$name',
                  address = '$address',
                  gender = '$gender',
                  phone = '$phone'
                  WHERE id = '$id' ";
        $update = mysqli_query($conn, $query);

        //cek
        if($update){
            echo "
                <script>
                    alert('Succes update data user');
                    document.location.href = '../index.php';
                </script>
            ";
        }else 
        {
            echo "
                <script>
                    alert('Failed to update data user');
                    document.location.href = 'member_update.php';
                </script>
            ";
        }

    }
?>