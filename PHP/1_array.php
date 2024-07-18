<?php

    $cars = array('Maruti','Hyundai','kia','Tata');
    $cars1[0]= "Rohan";
    $cars1[1]= 19;
    $cars1[2]= 6.14;
    $cars1[]= true;

    print_r($cars);
    echo"<br/>";
    print_r($cars1);
    echo"<br/>";
    $cars1[0]="Thala";
    print_r($cars1);
    unset($cars[0]);
    echo"<br/>";
    print_r($cars);
?>