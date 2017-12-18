<?php
session_start();

    //Include the connection file
    include '../dao/dao.php';
    $question_type = 'Q';
    $sql = "SELECT * FROM uploads where type='$question_type' ";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck < 1) {
        $_SESSION['uploadsTable'] = "";
        header("Location: ../../views/questions.php");
        
    } else {
        while($rows = mysqli_fetch_array($result)){
            
            $table[] = $rows;
        }
        
        $jsonUploads = json_encode($table);
        $_SESSION['uploadsTable'] = $table;

        header("Location: ../../views/questions.php");
        
    }

?>