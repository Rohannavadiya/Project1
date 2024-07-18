<?php
$scost = $_POST['Sales'];
$pcost = $_POST['Production'];

echo"Sales is $scost Production is $pcost";
if($pcost<$scost)
{
     $profit = $scost - $pcost ;
     echo"<br>Profit is $profit";
      
     $per = (100*$profit/$pcost);
     echo"<br>Profit in per is $per%";
}
else
{
     $loss = $scost - $pcost;
     echo"<br>Loss is $loss";

     $per = (100*$loss/$pcost);
     echo"<br>Loss in per $per%";
}
?>