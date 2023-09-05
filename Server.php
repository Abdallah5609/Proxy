<?php
$conn= mysqli_connect("localhost", "root", "", "myfirstsql");
if (!$conn){
    echo "failed";
}