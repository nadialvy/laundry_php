<?php 

    function show($query){
        include '../../koneksi.php';

        $result = mysqli_query($conn, $query);

        $wadah = [];
        while( $value = mysqli_fetch_assoc($result) ){
            $wadah[] = $value;
        }

        return $wadah;
    }
    
?>