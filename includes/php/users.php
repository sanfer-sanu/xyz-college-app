<?php
session_start();

//if(isset($_POST['users'])) {
    //Include the connection file
    include '../dao/dao.php';

    $sql = "SELECT * FROM register ";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1) {
        header("Location: ../..index.php?users=empty");
        exit();
    } else {
        while($rows = mysqli_fetch_array($result)){
            
            $table[] = $rows;
        }
        
        $jsonTable = json_encode($table);
        $_SESSION['usersTable'] = $jsonTable;

        header("Location: ../../views/users.php");
        exit();
    }

/*
} else {
    header("Location: ../../index.php");
    exit();
}
*/

?>