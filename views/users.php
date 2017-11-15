<?php

include_once '../index.php';
$jsonTable = $_SESSION['usersTable'];

?>

<script type="text/javascript">
    $(document).ready(function() {
            $('#table').bootstrapTable({
                data: <?php echo $jsonTable; ?>,    
                striped: false,
                pagination: true,
                search: false,
                pageSize: 20,
                pageList: [20, 40, 60, 100, 200],
                minimumCountColumns: 2,
                clickToSelect: true
            });

    }); //document.ready
</script>

<div class="container">
    <div class="mt-lg-3 mt-sm-1">
        <table id="table" class="mt-3" data-height="400">
            <thead class="thead-default">
                <tr>
                    <th class="text-center" data-field="Reg_ID">Registation Id</th>
                    <th class="text-center" data-field="name">Name</th>
                    <th class="text-center" data-field="username">Username</th>
                    <th class="text-center" data-field="age">Age</th>
                </tr>
            </thead>
        </table>
    </div>
</div>