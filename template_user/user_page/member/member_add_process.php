<?php 
    if($_POST){
        //koneksi
        include '../../../koneksi.php';

        //get data
        $name = $_POST["name"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];

        //query
        $query = "INSERT INTO member
                  VALUE ('', '$name', '$address', '$gender', '$phone')";
        $add = mysqli_query($conn, $query);

        //cek
        if($add){
            echo "
                <script>
                    alert('Succes add data user')
                    document.location.href = '../index.php';
                </script>
            ";
        }
        else {
            echo "
            <script>
                alert('Failed to add data customers')
                document.location.href = 'member_add.php';
            </script>
        ";
        }
    }

?>