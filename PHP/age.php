<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" novalidate>
        <table border="1" height="50%" width="50%" align="center" cellpadding=10 cellspacing=10>
            <tr align="center">
                <td colspan="3">Birth Date</td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="Bday" id=""placeholder="Day" required />
                </td>
                <td>
                    <input type="number" name="Bmonth" id=""placeholder="Month" required />
                </td>
                <td>
                    <input type="number" name="Byear" id=""placeholder="Year" required />
                </td>
            </tr>
            <tr align="center">
                <td colspan="3">Current Date</td>
            </tr>
            <tr>
                <td><input value="<?php echo date('d'); ?>" type="number" name="Cday" id="" required /></td>
                <td><input value="<?php echo date('m'); ?>" type="number" name="Cmonth" id="" required /></td>
                <td><input value="<?php echo date('Y'); ?>" type="number" name="Cyear" id="" required /></td>
            </tr>
            <tr>
                <td colspan="3" align=center>
                        <input type="submit" value="Calculate Age" name="submit" />
                </td>
            </tr>
            <tr>
                <td colspan="3" align=center>
                    <?php
                        if(isset($_POST['submit'])==true)
                        {
                            $Bday=$_POST['Bday'];
                            $Bmonth=$_POST['Bmonth'];
                            $Byear=$_POST['Byear'];

                            $Cday=$_POST['Cday'];
                            $Cmonth=$_POST['Cmonth'];
                            $Cyear=$_POST['Cyear'];

                            $BirthTime = mktime(0,0,0,$Bday,$Bmonth,$Byear);

                            $CurrentTime = mktime(0,0,0,$Cday,$Cmonth,$Cyear);

                            $difference= abs($CurrentTime-$BirthTime);

                            if(empty($Bday)==true || empty($Bmonth)==true || empty($Byear)==true || empty($Cday)==true || empty($Cmonth)==true || empty($Cyear)==true )
                            {
                                echo "<br/><font color='red'>all inputs are required</font>";
                            }
                            else if(is_numeric($Bday)==false || is_numeric($Bmonth)==false || is_numeric($Byear)==false || is_numeric($Cday)==false || is_numeric($Cmonth)==false || is_numeric($Cyear)==false )
                            {
                                echo "<br/><font color='red'>all inputs must be numbers</font>";
                            }
                            else
                            {
                                echo"<h1>your age is </h1> Seconds $difference";
                                echo "<br/> Minutes = ".($difference/60);
                                echo "<br/> Hours = ".($difference/60*60);
                                echo "<br/> Days = " . ($difference/(60*60*24)); 
                                echo "<br/> Years = " . round(($difference/(60*60*24*365)),0); 
                            }
                        } 
                        
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>