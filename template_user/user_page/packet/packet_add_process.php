<?php 
    if($_POST){
        include '../../../koneksi.php';

        //get data
        $type = $_POST["type"];
        $price = $_POST["price"];

        //query
        $query = "INSERT INTO packet
                  VALUE ('', '$type', '$price')";
        $add = mysqli_query($conn, $query);

        //cek
        if($add){
            echo "
                <script>
                    alert('Succes add data')
                    document.location.href = '../packet_index.php';
                </script>
            ";
        }
        else {
            echo "
            <script>
                alert('Failed to add data')
                document.location.href = 'member_add.php';
            </script>
        ";
        }
    }

?>