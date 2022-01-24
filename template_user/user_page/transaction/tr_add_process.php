<?php 
    if($_POST){
        // var_dump($_POST);
        // die();
        include '../../../koneksi.php';

        $idMemb = $_POST["member_name"];
        $date = $_POST["date"];
        $deadline = $_POST["deadline"];
        // $paydate = $_POST["payDate"];
        // $status = $_POST["status"];
        // $paid = $_POST["paid"];
        $idUser = $_POST["user_name"];
        $qty = $_POST["qty"];
        $type = $_POST["type"];

        //query
        $query = "INSERT INTO transaction
                  VALUE (NULL, '$idMemb', '$date', '$deadline', NULL, 'new', 'not yet', '$idUser') ";
        $add = mysqli_query($conn, $query);
        
        //cek
        if($add){
            $tr_id = mysqli_insert_id($conn);
            $queryDetail = "INSERT INTO transaction_detail
                            VALUE (NULL, '$tr_id', '$type', '$qty')";

                            // echo $queryDetail;
            $tr_detail_add = mysqli_query($conn, $queryDetail);

            if($tr_detail_add){
                echo "
                    <script>
                        alert('Succes add data');
                        document.location.href = '../transaction_index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Failed add data');
                        document.location.href = '../transaction_index.php';
                    </script>
                ";
            }
            
        }else 
        {
            echo "
                <script>
                      alert('Failed to add data');
                      document.location.href = 'tr_add.php';
                </script>
            ";
            // printf(mysqli_error($conn));
        }

    }

?>