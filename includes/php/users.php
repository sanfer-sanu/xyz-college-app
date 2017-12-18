<?php
session_start();

    //Include the connection file
    include '../dao/dao.php';

    $sql = "SELECT * FROM register ";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1) {
        header("Location: /plexus/index.php?users=empty");
        exit();
    } else {
        while($rows = mysqli_fetch_array($result)){
            
            $table[] = $rows;
        }
        
        $_SESSION['usersTable'] = $table;

        header("Location: ../../views/users.php");
        exit();
    }

?>