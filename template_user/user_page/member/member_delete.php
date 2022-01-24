<?php 

    if($_GET){
        //koneksi
        include '../../../koneksi.php';

        //get data
        $member_id = $_GET["id"];

        //query
        $query = "DELETE FROM member 
                  WHERE id = '$member_id' ";
        $delete = mysqli_query($conn, $query);

        //cek
        if($delete){
            echo "
                <script>
                    alert('Successfully delete data')
                    document.location.href = '../index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Failed delete data')
                    document.location.href = '../index.php';
                </script>
            ";
        }
    }

?>