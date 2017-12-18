<?php

include_once '../index.php';
$jsonTable = $_SESSION['usersTable'];

?>

<script type="text/javascript">
    $(document).ready(function() {
            $('#userTable').DataTable({
                
            });

    }); //document.ready
</script>

<div class="container">
    <div class="mt-lg-3 mt-sm-1">
        <table id="userTable" class="table table-bordered table-hover" width="100%" data-height="400">
            <thead class="thead-light">
                <tr>
                    <th class="text-center" data-field="Reg_ID">Registation Id</th>
                    <th class="text-center" data-field="name">Name</th>
                    <th class="text-center" data-field="username">Username</th>
                    <th class="text-center" data-field="age">Age</th>
                </tr>
            </thead>
            <tbody class="text-center">
            <?php 
                if(!empty($jsonTable)) {
                    foreach($jsonTable as $user) {
                        ?>
                        <tr>
                            <td> <?php echo $user['Reg_ID']; ?> </td>
                            <td> <?php echo $user['name']; ?> </td>
                            <td> <?php echo $user['username']; ?> </td>
                            <td> <?php echo $user['age']; ?> </td>
                        </tr>
                        <?php
                    }
                }
             ?>
            </tbody>
                
        </table>
    </div>
</div>