<?php
 include "Server.php";
    if (isset($_POST['btn'])) {
    $username= $_POST['username'];
    $Passw= $_POST['pwd'];
    $Gender= $_POST['gender'];
    

    $query= "INSERT INTO `trial` (username,pwd,gender) VALUES('$username','$Passw','$Gender')";
    $result= mysqli_query($conn,$query);
    if($result){
        header("Success");
    }
    else {
       echo("Failed");
    }
}

?>