<?php
    require_once('../inc/verify_login.php');
    require_once('../inc/verify_input.php');
    require_once('../inc/connection.php');
    $sql = 'insert into course (title,fees,duration,description) values(?,?,?,?)';

    $cmd= $db->prepare($sql);

    $cmd->bindParam(1,$_POST['title']);
    $cmd->bindParam(2,$_POST['fees']);
    $cmd->bindParam(3,$_POST['duration']);
    $cmd->bindParam(4,$_POST['description']);

    $cmd->execute();

    $msg = "course inserted";
    header("location:../course.php?success=$msg");
?>