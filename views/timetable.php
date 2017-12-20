<?php

include_once '../index.php';

$firstYearTable     = $_SESSION['firstYearTimeTable'];
$secondYearTable    = $_SESSION['secondYearTimeTable'];
$thirdYearTable     = $_SESSION['thirdYearTimeTable'];

?>

<script type="text/javascript">
    $(document).ready(function() {
            $('#firstYearTable').DataTable();
            $('#secondYearTable').DataTable();
            $('#thirdYearTable').DataTable();
    }); //document.ready
</script>

<div class="ml-5 mt-4 mt-sm-3 w-5">
    <div class="row">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">First year</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Second Year</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">Third Year</a>
            </li>
        </ul>
    </div>
    
    <div class="row mt-4 mt-sm-2">
        <div class="tab-content " id="myTabContent">
            <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                <table id="firstYearTable" class="table table-bordered table-hover" width="100%" data-height="400">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" data-field="Dayonetime">Day 1 Timings</th>
                            <th class="text-center" data-field="Dayonesub">Day 1 Subject </th>
                            <th class="text-center" data-field="Daytwotime">Day 2 Timings</th>
                            <th class="text-center" data-field="Daytwosub">Day 2 Subject </th>
                            <th class="text-center" data-field="Daythreetime">Day 3 Timings</th>
                            <th class="text-center" data-field="Daythreesub">Day 3 Subject </th>
                            <th class="text-center" data-field="Dayfourtime">Day 4 Timings</th>
                            <th class="text-center" data-field="Dayfoursub">Day 4 Subject </th>
                            <th class="text-center" data-field="Dayfivetime">Day 5 Timings</th>
                            <th class="text-center" data-field="Dayfivesub">Day 5 Subject </th>
                            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php 
                        if(!empty($firstYearTable)) {
                            foreach($firstYearTable as $one) {
                                ?>
                                <tr>
                                    <td> <?php echo $one['Dayonetime']; ?> </td>
                                    <td> <?php echo $one['Dayonesub']; ?> </td>
                                    <td> <?php echo $one['Daytwotime']; ?> </td>
                                    <td> <?php echo $one['Daytwosub']; ?> </td>
                                    <td> <?php echo $one['Daythreetime']; ?> </td>
                                    <td> <?php echo $one['Daythreesub']; ?> </td>
                                    <td> <?php echo $one['Dayfourtime']; ?> </td>
                                    <td> <?php echo $one['Dayfoursub']; ?> </td>
                                    <td> <?php echo $one['Dayfivetime']; ?> </td>
                                    <td> <?php echo $one['Dayfivesub']; ?> </td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                <table id="secondYearTable" class="table table-bordered table-hover" width="100%" data-height="400">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center" data-field="Dayonetime">Day 1 Timings</th>
                        <th class="text-center" data-field="Dayonesub">Day 1 Subject </th>
                        <th class="text-center" data-field="Daytwotime">Day 2 Timings</th>
                        <th class="text-center" data-field="Daytwosub">Day 2 Subject </th>
                        <th class="text-center" data-field="Daythreetime">Day 3 Timings</th>
                        <th class="text-center" data-field="Daythreesub">Day 3 Subject </th>
                        <th class="text-center" data-field="Dayfourtime">Day 4 Timings</th>
                        <th class="text-center" data-field="Dayfoursub">Day 4 Subject </th>
                        <th class="text-center" data-field="Dayfivetime">Day 5 Timings</th>
                        <th class="text-center" data-field="Dayfivesub">Day 5 Subject </th>
                        
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php 
                        if(!empty($secondYearTable)) {
                            foreach($secondYearTable as $two) {
                                ?>
                                <tr>
                                    <td> <?php echo $two['Dayonetime']; ?> </td>
                                    <td> <?php echo $two['Dayonesub']; ?> </td>
                                    <td> <?php echo $two['Daytwotime']; ?> </td>
                                    <td> <?php echo $two['Daytwosub']; ?> </td>
                                    <td> <?php echo $two['Daythreetime']; ?> </td>
                                    <td> <?php echo $two['Daythreesub']; ?> </td>
                                    <td> <?php echo $two['Dayfourtime']; ?> </td>
                                    <td> <?php echo $two['Dayfoursub']; ?> </td>
                                    <td> <?php echo $two['Dayfivetime']; ?> </td>
                                    <td> <?php echo $two['Dayfivesub']; ?> </td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                <table id="thirdYearTable" class="table table-bordered table-hover" width="100%" data-height="400">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" data-field="Dayonetime">Day 1 Timings</th>
                            <th class="text-center" data-field="Dayonesub">Day 1 Subject </th>
                            <th class="text-center" data-field="Daytwotime">Day 2 Timings</th>
                            <th class="text-center" data-field="Daytwosub">Day 2 Subject </th>
                            <th class="text-center" data-field="Daythreetime">Day 3 Timings</th>
                            <th class="text-center" data-field="Daythreesub">Day 3 Subject </th>
                            <th class="text-center" data-field="Dayfourtime">Day 4 Timings</th>
                            <th class="text-center" data-field="Dayfoursub">Day 4 Subject </th>
                            <th class="text-center" data-field="Dayfivetime">Day 5 Timings</th>
                            <th class="text-center" data-field="Dayfivesub">Day 5 Subject </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                            if(!empty($thirdYearTable)) {
                                foreach($thirdYearTable as $three) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $three['Dayonetime']; ?> </td>
                                        <td> <?php echo $three['Dayonesub']; ?> </td>
                                        <td> <?php echo $three['Daytwotime']; ?> </td>
                                        <td> <?php echo $three['Daytwosub']; ?> </td>
                                        <td> <?php echo $three['Daythreetime']; ?> </td>
                                        <td> <?php echo $three['Daythreesub']; ?> </td>
                                        <td> <?php echo $three['Dayfourtime']; ?> </td>
                                        <td> <?php echo $three['Dayfoursub']; ?> </td>
                                        <td> <?php echo $three['Dayfivetime']; ?> </td>
                                        <td> <?php echo $three['Dayfivesub']; ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>    
                </table>
            </div>
        </div>
    </div>
</div>