<?php
        session_start();
        include "../Server.php";

        if (!isset($session['username'])) {
            header("Location: ../login");
        }
        $username = $_SESSION['username'];

        $query= "SELECT * FROM trial WHERE username= '$username'";
        $result= mysqli_query($conn, $query);
        
        $row= my_sqli_fetch_assoc($result);
        $fname= $row['username'];
        echo "Welcome, " .$fname;
        echo "<br><a href='../logout.php'>Logout</a>";
?>