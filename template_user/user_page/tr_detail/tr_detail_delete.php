<?php 
    if($_GET){
        include '../../../koneksi.php';

        $id = $_GET["id"];

        $query = "DELETE FROM transaction_detail
                  WHERE id = '$id' ";
        $delete = mysqli_query($conn, $query);

        //cek
        if($delete){
            echo "
                <script>
                    alert('Successfully delete data')
                    document.location.href = '../tr_detail_index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Failed delete data')
                    document.location.href = '../tr_detail_index.php';
                </script>
            ";
        }
    }

?>