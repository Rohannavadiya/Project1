<?php

    $car=array("Maruti","Omnny","Musukey");
    $oc[0]="rohan";
    $oc[1]=19;
    $oc[]='5-10-2005';
    $oc[5]=1000000;

    print_r($car);
    echo"<hr/>";
    print_r($oc);
    echo"<hr/>";

    $car[0]="tata";

    unset($car[2]);

    print_r($car);
    echo"<hr/>";

    $oc[4]="xyz";

    print_r($oc);
?>