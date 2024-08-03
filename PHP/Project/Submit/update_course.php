<?php
    require_once("../inc/connection.php");
    extract($_POST);
    var_dump($_POST);
    $sql="UPDATE  course  SET  title =?, fees =?, duration =?, `description`=? WHERE id=?";

    $cmd=$db->prepare($sql);
    $cmd->bindParam(1,$title);
    $cmd->bindParam(2,$fees);
    $cmd->bindParam(3,$duration);
    $cmd->bindParam(4,$description);
    $cmd->bindParam(5,$courseid);
    
    $cmd->execute();

    $msg="Course Detail Update Successfully";
    header("location:../course.php?success=$msg");
?>