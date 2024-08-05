<?php
    require_once("../inc/connection.php");
    extract($_POST);
    var_dump($_POST);
    $sql="UPDATE subject SET courseid=?,title=?,rate=? WHERE id=?";

    $cmd=$db->prepare($sql);
    $cmd->bindParam(1,$courseid);
    $cmd->bindParam(2,$title);
    $cmd->bindParam(3,$rate);
    $cmd->bindParam(4,$subjectid);
    
    $cmd->execute();

    $msg="subject Detail Update Successfully";
    header("location:../subject.php?success=$msg");
?>