<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('box.php');

        $b1= new Box();

        echo"<br/>laptop box area ".$b1->getArea(25,50);
        echo"<br/>gift box area ".$b1->getArea(25,50);
        echo"<br/>ac box volume ".$b1->getVolume(25,50,820);
        echo"<br/>abc box volume ".$b1->getVolume(25,50,59);
    ?>
</body>
</html>