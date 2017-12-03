<?php
    include_once '../index.php';

    if(!isset($_SESSION['u_id'])){
        exit();
    }
?>

<div class="container">
    
    <br/>
    <div class="row">
        <div class="md-5">
            <div class="alert alert-info" role="alert">
                <strong>Heads up!</strong> Please upload a file lesser than 10 MB. 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="md-5">
            <div id="uploads">
                <form enctype="multipart/form-data" action="/suhailproject/views/fileupload.php" method="POST">
                    <input type="file" id="uploadFile" name="uploadFile"> <input type="submit" id="btnSubmit" name="btnSubmit" value="Upload Now">
                </form>
            </div>
        </div>
    </div>

<?php

if(isset($_FILES ['uploadFile'])){
    $uploadName = $_FILES['uploadFile']['name'];
    $uploadTemp = $_FILES['uploadFile']['tmp_name'];
    $uploadType = $_FILES['uploadFile']['type'];
    $uploadSize = $_FILES['uploadFile']['size'];

    $uploadName = preg_replace("#[^a-z0-9.]#i", "", $uploadName);

    if($uploadSize > 10000000) {
        ?>
        <br/>
        <div class="row">
            <div class="md-5">
                <div class="alert alert-danger" role="alert">
                        <strong>File too large!</strong> Please select a file less than 10MB. Current file size <?php echo $uploadSize ?>
                </div>
            </div>
        </div>  
        <?php
        exit();
    }
    if(!$uploadTemp) {
        ?>
        <br/>
        <div class="row">
            <div class="md-5">
                <div class="alert alert-warning" role="alert">
                        <strong>No File Selected!</strong> Please select a file less than 10MB.
                </div>
            </div>
        </div>  
        <?php
    } else {
        move_uploaded_file($uploadTemp, "../pdf/$uploadName");
        ?>
        <br/>
        <div class="row">
            <div class="md-5">
                <div class="alert alert-success" role="alert">
                        <strong>Success!</strong> File uploaded successfully!
                </div>
            </div>
        </div>  
        <?php
    }

}

?>
</div>