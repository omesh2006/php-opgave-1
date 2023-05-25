<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<?php


$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

echo $myArray [0];
echo print_r($myArray);
echo "<br>";

$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$myArray[] = 'boot'; 

echo print_r($myArray);


deel 3

bar word afgedrukt op regel 2

4 word afgedrukt op regel 5

toyota word afgedrukt op regel 8

alles word afgedrukt op regel 9

number 4 = 5 word agedrukt op regel 12


deel 4


<?php
$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];
$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 1);
echo "Gemiddelde is: " . $gemiddelde;
?>








?>


</body>
</html>

