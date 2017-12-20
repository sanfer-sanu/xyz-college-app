<?php 

    session_start();
    include '../dao/dao.php';

    if(isset($_POST['input'])){
        $noticeInfo = $_POST['input'];

        $add = $conn->prepare("insert into Notice (Information) values (?) ");
        $add->bind_param("s", $noticeInfo);

        if(mysqli_execute($add)) {
            echo "success";
        } else {
            echo "failure";
        }
        
    }

    if(isset($_POST['delete'])){
        $noticeId = $_POST['delete'];

        $delete = $conn->prepare("delete from Notice where NoticeID = ? ");
        $delete->bind_param("i", $noticeId);
        
        if(mysqli_execute($delete)) {
            echo "success";
        } else {
            echo "failure";
        }
        
    }

?>