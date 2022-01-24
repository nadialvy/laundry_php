<?php 
    if($_POST){
        include '../../../koneksi.php';
        
        $id = $_POST["id"];
        $type = $_POST["type"];
        $price = $_POST["price"];

        $query = "UPDATE packet SET
                  type = '$type',
                  price = '$price'
                  WHERE id = '$id' ";
        $update = mysqli_query($conn, $query);

        //cek
        if($update){
            echo "
                <script>
                    alert('Succes update data user');
                    document.location.href = '../packet_index.php';
                </script>
            ";
        }else 
        {
            echo "
                <script>
                    alert('Failed to update data user');
                    document.location.href = 'packet_update.php';
                </script>
            ";
        }
    }

?>