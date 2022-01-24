<?php 

    if( $_GET["id"] ){
        //koneksi
        include '../../../koneksi.php';

        //ambil data
        $user_id = $_GET["id"];

        //query
        $query = "DELETE FROM user
                  WHERE id = $user_id";
        $delete = mysqli_query($conn, $query);

        //cek
        if( $delete ){
            echo "
                <script>
                    alert('Successfully delete data')
                    document.location.href = '../user_index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Failed to delete data')
                    document.location.href = 'user_show.php';
                </script>
            ";
        }
    }

?>