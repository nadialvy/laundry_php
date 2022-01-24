<?php 

    if($_POST){
        
        //koneksi
        include '../koneksi.php';

        //get data
        $phone = $_POST["phone"];

        //cek data apakah ada di database
        $query = "SELECT phone FROM member
                  WHERE phone='$phone' ";

        $check = mysqli_num_rows(mysqli_query($conn, $query));
        
        if($check){
            echo "
                <script>
                    document.location.href = '../main_page/index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Phone number is incorrect, try again')
                    document.location.href = 'sign_in_member.php';
                </script>
            ";
        }
    }

?>

