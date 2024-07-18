<?php
    require_once('../inc/verify_login.php');
    require_once('../inc/verify_input.php');
    require_once('../inc/connection.php');
    //var_dump($_POST);

    $sql ='insert into subject (courseid,title,rate) values(?,?,?)';

    $cmd = $db->prepare($sql);
    extract($_POST);

    $data = array($courseid,$title,$rate);

    $cmd->execute($data);

    $msg="Subject is add Successfully";

    header("Location:../subject.php?success=$msg");
?>