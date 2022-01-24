<?php 
    if($_POST){
        include '../../koneksi.php';

        //get data
        $search = $_POST["search"];
        // var_dump($search); die();

        $query = "SELECT * FROM member 
                  WHERE name LIKE '%$search%' ";
        $result = mysqli_query($conn, $query);

        $data = mysqli_fetch_assoc($result);
        var_dump($data); die();
    }
?>