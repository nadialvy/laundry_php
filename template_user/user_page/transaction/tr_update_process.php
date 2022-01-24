<?php   
    if($_POST){
        include '../../../koneksi.php';

        $id = $_POST["id"];
        $idMemb = $_POST["member_name"];
        $date = $_POST["date"];
        $deadline = $_POST["deadline"];
        $paydate = $_POST["payDate"];
        $status = $_POST["status"];
        $paid = $_POST["paid"];
        $idUser = $_POST["user_name"];

        $query = "UPDATE transaction SET
                  id_member = '$idMemb',
                  date = '$date',
                  deadline = '$deadline',
                  pay_date = '$paydate',
                  status = '$status',
                  paid = '$paid',
                  id_user = '$idUser'
                  WHERE id = '$id'
                  ";
        $update = mysqli_query($conn, $query);

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