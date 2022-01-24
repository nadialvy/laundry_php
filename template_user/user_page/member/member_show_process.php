<?php 

function show($query){
    include '../../koneksi.php'; //koneksi

    $result = mysqli_query($conn, $query); //query
    //result adalah ibjek, maka dari itu harus di fetch biar bisa
    //tampil datanya

    $wadah = [];
    while( $value = mysqli_fetch_assoc($result) ) {
        $wadah[] = $value;
    }
    return $wadah;   
    
    //wadah = kotak kosong
    //value = baju
}

?>