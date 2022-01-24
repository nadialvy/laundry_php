<?php 
    //koneksi
    include '../koneksi.php';

    //get data
    $name = mysqli_real_escape_string($_POST["name"]);
    $address = mysqli_real_escape_string($_POST["address"]);
    $gender = mysqli_real_escape_string($_POST["gender"]);
    $number = mysqli_real_escape_string($_POST["number"]);

    if(empty($gender)){
        echo "
            <script>
                alert('Please fill the gender fields');
                location.href='registration_member.php';
            </script>";
    }

    //check is there any same phone number
    $queryCheck = "SELECT phone FROM member WHERE phone = '$number' ";
    $check = mysqli_query($conn, $queryCheck);
    if (mysqli_num_rows($check) > 0){
        echo "
            <script>
                alert('The phone number is already registered, try again with another phone number');
                document.location.href = 'registration_member.php';
            </script>
        ";
    } else {
        //query and insert data into table
        $queryMember = "INSERT INTO member
        VALUE('', '$name', '$address', '$gender', '$number')";
        $insertMember = mysqli_query($conn, $queryMember);

        //cek
        if($insertMember){
            echo "
            <script>
                alert('Success to sign up');
                document.location.href = '../sign_in/sign_in_member.php';
            </script>
            ";
        }else {
            echo "
            <script>
                alert('Failed to sign up')
                document.location.href = 'registration.php';
            </script>
            ";
        }

        }
    


?>