<?php
    session_start();
  
  include "../Server.php";
    // if (isset($_POST['submit'])) {

        $username = $_POST ['username'];
        $pass = $_POST['pwd'];

        $query= "SELECT * FROM trial WHERE `username`= '$username' AND `pwd` = '$pass'";
        $res= mysqli_query($conn, $query);

        if (mysqli_num_rows($res)>0) {
            $_SESSION['username'] = $username;
            header("Location: ../Dashbod");
        }
        else {
            echo"<script>alert('invalid username/password');
            window.location= '../login';
            </script>";
        // }
        }
?>