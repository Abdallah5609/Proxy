<?php
 include "Server.php";
if(isset($_POST['btn_reg'])){
    //  if(isset($_POST['btn'])) {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO users (first_name, middle_name, surname, email, passw, gender, mobile, dob)
    VALUES('$first_name', '$middle_name', '$surname', '$email', '$passw', '$gender', '$mobile', '$dob')";

        $result = mysqli_query($conn, $sql);

        if($result){
        header("location: login.php");
        echo("connected");
      }else {
          echo 'something is wrong';
      }
    }
?>