<?php
    require_once('../inc/verify_login.php');
    require_once('../inc/verify_input.php');
    require_once('../inc/connection.php');
    //var_dump($_POST);
    extract($_POST);

    $sql = "INSERT INTO lecture(teacherid, subjectid, batchid, duration, amount, lecturedate) VALUES (:teacherid,:subjectid,:batchid,:duration,:amount,:lecturedate)";

    $cmd = $db->prepare($sql);

    $data = array(":teacherid"=>$teacherid,":subjectid"=>$subjectid,":batchid"=>$batchid,":duration"=>$duration,":amount"=>$amount,":lecturedate"=>$lecturedate);

    $cmd->execute($data);

    $msg="lecture added successfully";
    header("location:../lecture.php?success=$msg");
?>