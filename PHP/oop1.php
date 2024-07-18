<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('product.php');

        $p1 = new Product();

        $p1->setName('Rohan');
        $p1->setSurname('Navadiya');
        $p1->setBob(5_10_2005);
        $p1->setGender('M');
        $p1->setWeight(70);
        $p1->setEmail('rohannavadiya@gmail.com');
        $p1->setMobile(5834896248);

        echo"<br/>Name ".$p1->getName();
        echo"<br/>Surname ".$p1->getSurname();
        echo"<br/>Bob ".$p1->getBob();
        echo"<br/>Gender ".$p1->getGender();
        echo"<br/>Weight ".$p1->getWeight();
        echo"<br/>Email ".$p1->getEmail();
        echo"<br/>Mobile ".$p1->getMobile();
    ?>
</body>
</html>