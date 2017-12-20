<?php
    session_start();

    //Include the connection file
    include '../dao/dao.php';

    $sql1 = "SELECT * FROM fstyrtimetable ";
    $result1 = mysqli_query($conn, $sql1);

    $resultCheck1 = mysqli_num_rows($result1);

    if($resultCheck1 > 0) {
        while($rows1 = mysqli_fetch_array($result1)){
            
            $table1[] = $rows1;
        }
        $_SESSION['firstYearTimeTable'] = $table1;
    }

    $sql2 = "SELECT * FROM secyrtimetable ";
    $result2 = mysqli_query($conn, $sql2);

    $resultCheck2 = mysqli_num_rows($result2);

    if($resultCheck2 > 0) {
        while($rows2 = mysqli_fetch_array($result2)){
            
            $table2[] = $rows2;
        }
        $_SESSION['secondYearTimeTable'] = $table2;
    }

    $sql3 = "SELECT * FROM thrdyrtimetable ";
    $result3 = mysqli_query($conn, $sql3);

    $resultCheck3 = mysqli_num_rows($result3);

    if($resultCheck3 > 0) {
        while($rows3 = mysqli_fetch_array($result3)){
            
            $table3[] = $rows3;
        }
        $_SESSION['thirdYearTimeTable'] = $table3;
    }

    header("Location: /plexus/views/timetable.php");

?>