<!DOCTYPE html>
<?php

include("cal_allfun.php");

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="calculator.php" method = "GET">

<label> 1.Addition</label> <br/><br/>
<label> 2.Subtraction</label> <br/><br/>
<label> 3.Multiplication</label> <br/><br/>
<label> 4.Divide</label> <br/><br/>


Enter Value Of a: <input Type = "Text" name = "a" value = ""/> <br/>
Enter Value Of b: <input Type = "Text" name = "b" value = ""/> <br/>

<br><br>

select your choice: <input Type = "Text" value = "" name = "sel" />

<input Type = "submit" value = "Execute" name = "sbt" />
<input Type = "Reset" value = "Clear" name = "Rst" />

</form>

<?php
if(isset($_GET['sbt']))
{
    $p = $_GET['sel'];
    $x = $_GET['a'];
    $y = $_GET['b'];

    if($p == 1)
    {
        $z = fadd($x, $y);
        echo($z);
    }

    if($p == 2)
    {
        $z = fsub($x, $y);
        echo($z);
    }

    if($p == 3)
    {
        $z = fmul($x, $y);
        echo($z);
    }

    if($p == 4)
    {
        $z = fdivide($x, $y);
        echo($z);
    }


}

?>


    
</body>
</html>