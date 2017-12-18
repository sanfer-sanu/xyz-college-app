<?php
    session_start();

    include '../dao/dao.php';

    $filename = $_POST['filename'];
    $fileType = $_POST['type'];

    $sql = $conn->prepare("delete from uploads where filename='$filename' ");
    
    if(mysqli_execute($sql)) {
        if($fileType == "Q") {
            $filepath = '../../../pdf/Questions/'. $filename;
        } else {
            $filepath = '../../../pdf/Syllabus/'. $filename;
        }
        
        if(file_exists($filepath)){
            if(unlink($filepath)) {
                
                if($fileType == "Q"){
                    $result="Qsuccess";
                } else {
                    $result = "Ssuccess";
                }

                echo $result;
            } else {
                echo "File Exists, but cannot delete the file. ". getcwd();
            }
        } else {
            echo "File not exist. ". getcwd();
            
        }
    }


?>