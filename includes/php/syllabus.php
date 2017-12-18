<?php
session_start();

//if(isset($_POST['users'])) {
    //Include the connection file
    include '../dao/dao.php';

    $syllabus_type = 'S';
    $sql = "SELECT * FROM uploads where type='$syllabus_type' ";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1) {
        $_SESSION['uploadsTable'] = "";
        header("Location: ../../views/syllabus.php");
        
    } else {
        while($rows = mysqli_fetch_array($result)){
            
            $table[] = $rows;
        }
        
        $jsonUploads = json_encode($table);
        $_SESSION['uploadsTable'] = $table;

        header("Location: ../../views/syllabus.php");
        
    }

?>