<?php
    session_start();

    //Include the connection file
    include '../dao/dao.php';

    $sql = "SELECT * FROM Notice ";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1) {
        $_SESSION['notices'] = '';
        header("Location: /plexus/views/notice.php?notice=empty");
    } else {
        while($rows = mysqli_fetch_array($result)){
            
            $table[] = $rows;
        }
        //$jsonTable = json_encode($table);
        $_SESSION['notices'] = $table;

        header("Location: ../../views/notice.php");
        exit();
    }

?>