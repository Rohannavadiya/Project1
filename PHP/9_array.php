<?php

    $stat_string="Gujrat mp up Rajashthan";
    $stat_array=explode(" ",$stat_string);
    print_r($stat_string);
    echo"<br/>";
    print_r($stat_array);
    echo"<br/>";

    $subject_array = ['Java','Php','C-Programming'];
    print_r($subject_array);
    echo"<br/>";
    $subject_string = implode("<br/>",$subject_array);
    echo"<br/>$subject_string";

    echo"<br/>";
    echo"<br/>";

    $person = array("NamE"=>"ankit","AGe"=>38,"Gender"=>true);
    print_r($person);
    echo"<br/>";

    $person = array_change_key_case($person,CASE_LOWER);
    print_r($person);

    $isFound = array_key_exists("name",$person);
    echo"<br/> is name exists in array $isFound";

    $isFound = array_key_exists("name1",$person);
    echo"<br/> is name exists in array $isFound";
?>