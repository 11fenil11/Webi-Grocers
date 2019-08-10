<?php
    session_start();

    session_destroy();
    echo "<script>window.open('HOME.php','_self')</script>";
?>