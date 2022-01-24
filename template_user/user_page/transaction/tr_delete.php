<?php 
    if($_GET){
        include '../../../koneksi.php';

        $id = $_GET["id"];

        $query = "DELETE FROM transaction
                  WHERE id = '$id' ";
        $delete = mysqli_query($conn, $query);

         //cek
         if($delete){
            echo "
                <script>
                    alert('Succes delete data')
                    document.location.href = '../transaction_index.php';
                </script>
            ";
        }
        else {
            echo "
            <script>
                alert('Failed to delete data')
                document.location.href = 'tr_add.php';
            </script>
        ";
        }

    }

?>