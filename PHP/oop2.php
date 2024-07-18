<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>2nd example of class & object and constructor etc</h1>

    <?php
        require_once('subject.php');

        $web = new Subject('PHP','decision making, loop, function etc',180);

        $web->display();

        $mobile = new Subject('MI','desiging',150,150000);

        $mobile->display();
    ?>
</body>
</html>