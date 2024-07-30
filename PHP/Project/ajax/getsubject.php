<?php
    require_once("../inc/connection.php");
    $sql="SELECT s.id ,s.title FROM subject s, batch b WHERE b.courseid=s.courseid and b.id=?";
    extract($_REQUEST);
    //var_dump($_REQUEST);
    $cmd = $db->prepare($sql);
    $cmd->bindParam(1,$batchid);
    $cmd->execute();
    $table = $cmd->fetchAll();
    echo "<select name='subjectid'>";
    foreach($table as $row)
    {
        echo "<option value='{$row['id']}'>{$row['title']}</option>";
    }
    echo "</select>";
?>