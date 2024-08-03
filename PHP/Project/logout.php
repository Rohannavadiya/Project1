<?php
    session_start();
    session_destroy();

    $msg="Logout successfully";
    header("location:index.php?success=$msg");
?>