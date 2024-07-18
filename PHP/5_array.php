<?php

$subject = array('name'=>'Bhai Luanguage','duration'=>5000,'isCertified'=>true);
print_r($subject);

$subject['trainer'] = "Rohan Navadiya";
    echo "<hr/>";
    print_r($subject); 
    echo "<hr/>";

    $country['population'] = 125000000;
    $country['capital'] = 'Delhi';
    $country['min'] = 8.4;
    $country['max'] = 37.6;
    echo "<br/>";
    print_r($country);
?>