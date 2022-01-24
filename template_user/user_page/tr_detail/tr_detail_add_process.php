<?php 
    if($_POST){
        //koneksi
        include '../../../koneksi.php';

        $tr_id = $_POST["tr_id"];
        $packet = $_POST["packet"];
        $qty = $_POST["qty"];

        $query = "INSERT INTO transaction_detail
                  VALUE ('', '$tr_id', '$packet', '$qty') ";
        $add = mysqli_query($conn, $query);

        //cek
        if($add){
            echo "
                <script>
                    alert('Succes add data');
                    document.location.href = '../tr_detail_index.php';
                </script>
            ";
        }else 
        {
            echo "
                <script>
                    alert('Failed to add data');
                    document.location.href = 'tr_detail_add.php';
                </script>
            ";
        }
    }
?>