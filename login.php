<?php
    include 'Server.php';
    if (isset($_POST['btn'])){
    $email = $_POST['email'];
    $passw = $_POST['passw'];

    $sql= "SELECT * FROM users
    WHERE email = '$email' AND passw ='$passw'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res)==1){
     echo "User exists";
    }
    else {
        echo "invalid";
    }
}
?>