<?php
    // require "../Sign_in/config/server_conn.php";
    // // $_SESSION['logged'];
    
    // $conn= mysqli_connect("localhost", "root", "", "myfirstsql");
    // $ask = "SELECT * FROM users" ;
    // $res= mysqli_query($conn, $ask);
    // $data = $res ->fetch_assoc();
    // $id= $data['ID'];
    // WHERE $id= ['ID']";

    // $id= $data['id'];
    // $ask = "SELECT * FROM users WHERE id= $data[id]";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param('s', $username);
    // $stmt->execute();

    // $result= $stmt->get_result();
    # code...
    
        
        
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage users</title>
    <style>
        table{
            display: flexbox;
            width: 70%;
            /* justify-content: center; */
            border: solid;
            box-sizing: border-box;

        }
    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr>    
                <th>id</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>email</th>
                <th>Gender</th>
                <th>Mobile number</th>
                <th colspan="2">Manage User</colspan></th>
            </tr>
        </thead>
        <?php
    require "../Sign_in/config/server_conn.php";
    // $_SESSION['logged'];
    
    // $conn= new mysqli_connect("localhost", "root", "", "myfirstsql");
    $ask = "SELECT `ID`, `first_name`, `surname`, `email`, `gender`, `mobile` FROM users" ;
    // $res= mysqli_query($conn, $ask);
    $res= $conn->query($ask);
    if ($res->num_rows>0) {
    while($row= $res->fetch_assoc()){ ?>
<!--     
    $data = $res ->fetch_assoc();
    $id= $data['ID']; -->

        
        <tbody>
            
            <tr>  <td><?php echo $row ['ID']; ?></td>
            <td><?php echo $row ['first_name']; ?></td>
            <td><?php echo $row ['surname'];?> </td>
          <td><?php echo $row ['email'];?> </td>
          <td><?php echo $row ['gender'];?> </td>
          <td><?php echo $row ['mobile'];?> </td> 
          <td><a href="#"><button> Edit </button></a></td>
          <td><a href="delete.php"><button> Delete </button></a></td>
             
        </tr>
        </tbody>        
        <?php }} ?>
    </table>
</body>

</html>