<?php
    include_once '../index.php';
    include_once '../includes/dao/dao.php';

    if(!isset($_SESSION['u_id'])){
        exit();
    } else {
        $jsonUploads = $_SESSION['uploadsTable'];
    }
?>

<div class="container">
    
    <br/>
    <div class="row">
        <div class="pl-0 col-6">
            <div class="alert alert-info" role="alert">
                <strong>Heads up!</strong> Please upload a file lesser than 10 MB. 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="md-5">
            <div id="uploads">
                <form enctype="multipart/form-data" action="/plexus/views/questions.php" method="POST">
                    <input type="file" id="uploadFile" name="uploadFile"> <input type="submit" id="btnUpload" name="btnUpload" value="Upload Now">
                </form>
            </div>
        </div>
    </div>
    <br/>
    
    
    <div id="divUploads" class="row">
        <div class="pl-0 col-6">
            <ul class="list-group">
                <?php
                if(!empty($jsonUploads)){
                    ?>
                    <br/>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-info" role="alert">
                                Questions in the application below. 
                            </div>
                        </div>
                    </div>
                    <?php

                    foreach($jsonUploads as $file){
                    ?>    
                    <li class="list-group-item justify-content-between">
                        <?php echo $file['filename']; ?>
                        <button type="button" id="btnDelete" name="btnDelete" onclick="javascript:deleteFile(this, '<?php echo $file['filename']; ?>', 'Q');">
                            <span class="badge badge-default badge-pill"> Delete</span>
                        </button>
                    </li>  
                    <?php 
                    }
                 } else {
                     ?>
                     <br/>
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-info" role="alert">
                                    No File exists. 
                                </div>
                            </div>
                        </div>
                        <?php
                 } ?>
            </ul>
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
            <div class="pl-0 col-6">
                <div class="alert alert-danger" role="alert">
                        <strong>File too large!</strong> Please select a file less than 10MB. Current file size <?php echo $uploadSize ?>
                </div>
            </div>
        </div>  
        <?php
        exit();
    }
    if($uploadType != 'application/pdf') {
        ?>
        <br/>
        <div class="row">
            <div class="pl-0 col-6">
                <div class="alert alert-danger" role="alert">
                    Please upload only pdf file extensions.
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
            <div class="pl-0 col-6">
                <div class="alert alert-warning" role="alert">
                        <strong>No File Selected!</strong> Please select a file less than 10MB.
                </div>
            </div>
        </div>  
        <?php
    } else {
        $uploadsResult = move_uploaded_file($uploadTemp, "../../pdf/Questions/$uploadName");
        if($uploadsResult){
            $add = $conn->prepare("insert into uploads (type, filename) values ('Q', ?)");
            $add->bind_param("s", $uploadName);

            if(mysqli_execute($add)){
                
                ?>
                <br/>
                <div class="row">
                    <div class="pl-0 col-6">
                        <div class="alert alert-success" role="alert">
                            <strong>Success!</strong> File uploaded successfully!
                            <button class="btn btn-success btn-sm float-right" type="button" id="btnRefresh" name="btnRefresh" onclick="window.location.href='/plexus/includes/php/questions.php';">
                            <span class=""> Refresh</span>
                            </button>
                        </div>
                    </div>
                </div>  
                <?php
            } else {
                ?>
                <br/>
                <div class="row">
                    <div class="pl-0 col-6">
                        <div class="alert alert-danger" role="alert">
                                <strong>Oops!</strong> File did not go through!
                        </div>
                    </div>
                </div>  
                <?php
            }
        }
    }

}

?>

</div>