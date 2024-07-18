<?php
    require_once('../inc/verify_login.php');
    require_once('../inc/verify_input.php');
    require_once('../inc/connection.php');
    $sql = 'insert into batch (courseid,startdate,enddate,classtime) values(?,?,?,?)';

    $cmd= $db->prepare($sql);

    $cmd->bindParam(1,$_POST['courseid']);
    $cmd->bindParam(2,$_POST['startdate']);
    $cmd->bindParam(3,$_POST['enddate']);
    $cmd->bindParam(4,$_POST['classtime']);

    $cmd->execute();

    $msg = "course inserted";
    header("location:../batch.php?success=$msg");
?>