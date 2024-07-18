<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('database.php');

        $db = new Database();
        echo "$db";

        $name= 'Rohan';
        if(isset($name)==true)
            echo"<br/>name is exists";
        if(isset($db->database)==true)
            echo "<br/>database exists";
        else    
            echo "<br/>database is not exists";

        if(isset($db->email)==true)
            echo"<br/>email exsist";
        else
            echo"<br/>email is not exsist";

        echo"<br/> $db->database";
        $db->databse = 'students';
    ?>
</body>
</html>