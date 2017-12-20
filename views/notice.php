<?php

include_once '../index.php';

$jsonTable = $_SESSION['notices'];


?>

<script type="text/javascript">
    $(document).ready(function() {

            $('#noticeTable').DataTable();

            $('.alert').hide();

            $('#btnAdd').click(function() {
                var input = $('#txtNotice').val();
                if(input== null || input == ''){
                    $('#notice-msg').html("Please enter something to add!");
                    $('.alert').show();
                    return false;
                } else {
                    $.ajax({
                        url: '/plexus/includes/php/notices.php',
                        type: 'POST',
                        data: {
                                input: input
                            },
                        success: function(data){
                            if(data == 'success'){
                                alert('Notice added successfully!');
                                window.location.href = '/plexus/includes/php/notice.php';
                            }

                        }
                    });
                }
            });

            

    }); //document.ready
</script>

<div class="container">
    <br/>
    <div class="row">
        <div class="col-12">
            <table id="noticeTable" class="table table-bordered" width="100%" data-height="400">
                <thead class="thead-default">
                    <tr>
                        <th class="text-center">Notices</th>
                        <th class="text-center">Info</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    if(!empty($jsonTable)){
                        foreach($jsonTable as $notice){
                            ?>
                            <tr>
                                <td><?php echo $notice['Information']; ?></td>
                                <td><button class="btn btn-primary btn-sm" onclick="deleteNotice('<?php echo $notice['NoticeID'] ?>');">Delete</button>
                            </tr>
                            <?php
                        }
                    }             
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            Notices you add here will appear on the app notice section and summary above as well.
        </div>
    </div>
    
    
    <div class="alert alert-danger alert-dismissible show fade hidden" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <span id="notice-msg"></span>
    </div>
    

    <br/>
    <div class="row">
        <div class="col-12 form-group">
            <textarea class="form-control" name="txtNotice" id="txtNotice" cols="121" rows="6"></textarea>
        
            <button id="btnAdd" name="btnAdd" class="btn btn-primary mt-2 float-right">Add Notice </button>
        </div>
    </div>
</div>