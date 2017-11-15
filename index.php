<?php
include_once 'header.php';


if(isset($_SESSION['u_id'])) {
    include 'views/postlogin.php';
} else {
    include 'views/prelogin.php';
}

include_once 'footer.php';
?>