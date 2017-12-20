<?php

include_once '../index.php';

?>


<div class="container">
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
    <h1>Plexus Andriod Admin!</h1>
    <p class="lead">An exculsive site created to maintain the Plexus Android App.</p>
    <p>
        <a tabindex="0" class="btn btn-lg btn-success popover-dismiss" role="button" data-toggle="popover" data-trigger="focus" title="Plexus" data-content="Hang on tight buddy! The app is releasing soon!">Get The App </a>
    </p>
    </div>

    
    <div class="row">
    <div class="col-lg-4">
        <h2>Users</h2>
        <p>View the andriod application user details. You can view their personal information and much more! </p>
        <p><a class="btn btn-primary" href="/plexus/includes/php/users.php" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
        <h2>Notice</h2>
        <p>add notices here and they appear in the mobile app. Cool know! </p>
        <p><a class="btn btn-primary" href="/plexus/includes/php/notice.php" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
        <h2>Time Table</h2>
        <p>View time table details here. Admin can view time table year wise. </p>
        <p><a class="btn btn-primary" href="/plexus/includes/php/timetable.php" role="button">View details &raquo;</a></p>
    </div>
    </div>
</div>