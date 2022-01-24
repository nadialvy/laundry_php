<?php 
    if($_POST){
        include '../../../koneksi.php';

        $id = $_POST["id"];
        $type = $_POST["type"];
        $qty = $_POST["qty"];

        $query = "UPDATE transaction_detail SET
                  packet_id = '$type',
                  qty = '$qty' 
                  WHERE id = '$id' ";
        $update = mysqli_query($conn, $query);
        // var_dump($update);
        // die();

        //cek
        if($update){
            echo "
                <script>
                    alert('Succes update data');
                    document.location.href = '../transaction_index.php';
                </script>
            ";
        }else 
        {
            echo "
                <script>
                    alert('Failed to update data');
                    document.location.href = '../transaction_update.php';
                </script>
            ";
        }
    }
?>