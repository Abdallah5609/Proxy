<?php
require 'constant.php';

        $GLOBALS['conn']  = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);
// if($conn){
//     echo "Connected";
// }
?>