<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    echo "<script> location.href='landing.php'; </script>";
?>