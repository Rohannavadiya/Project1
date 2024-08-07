<?php
    require_once("../inc/connection.php");
    extract($_REQUEST);

    $sql="select c.id,c.title,s.courseid,s.title from course c, subject s where s.courseid=c.id and c.id=?";

    $cmd = $db->prepare($sql);
    $cmd->bindParam(1,$courseid);
    $cmd->execute();
    $table=$cmd->fetchAll();
    
    echo "<select name='titleid'>";
    foreach($table as $row)
    {
        echo "<option value='{$row['id']}'>{$row['title']}</option>";
    }
    echo "</select>";
?>