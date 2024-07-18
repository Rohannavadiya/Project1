<?php
$amount = $_POST['amount'];
$rate = $_POST['rate'];
$month = $_POST['month'];
$r= $rate/12/100;
$b=1;
for($i=1;$i<=$month;$i++)
{
    $b=$b*(1+$r);
}
$e=$amount*$r*$b/($b-1);
echo"$e";
?>