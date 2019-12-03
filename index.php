<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPExercises</title>
</head>
<body>
    
    <?php 
    echo "hellooooo";
    ?>

    <?php
//concat & quotes & variables:
    $myVar = "blink once";
    $myNum = "42";
//in browser in heel andere volgorde
    echo $myVar.' '.$myNum.'</br>';
// break of iets anders verandert volgorde zinnen, en "twinkle" zin heeft andere marges en ander font
//omdat functies eerst worden gelezen en direct uitgevoerd tijdens de compile, en andere statements pas later, tijdens executie, denk ik  
//"hellooo" en "blink once" staan in inspect html aangeduid met 'pre'  
   
    $tWord = "twinkle";
    $sWord = "star";

    echo $tWord. ', '.$tWord.', little ' .$sWord. '.<br/>';

    $tWord = "koe";
    $sWord = "boe";
//herhaling eerste zin met nieuwe var's
    echo $tWord. ', '.$tWord.', little ' .$sWord. '<br/>';

//er staat een voorbeeld op de site https://www.phpexercises.com/php-create-use-variables.html waarbij dit lukt:
    echo "$tWord, $tWord, little  $sWord. <br/>";
//lukt dus wel, zonder concat puntjes 
?>

<h1> dit is heading 1 </h1>
<p> dit is een paragraaf </p>
<!--via inspect zie je hoe dit omgezet w in html, deze tags werken niet op zichzelf binnen de php-tag--> 


<?php
$nogeenvar = "blabla";
echo "het is allemaal ".$nogeenvar. ", ". $nogeenvar. ". </br></br>";
?>

<?php
//arithmetic operators:
$numOne = 7;
$numTwo = 10;
$sum = $numOne + $numTwo;
$sub = $numTwo - $numOne;

echo $numOne. " + " .$numTwo. " = ". $sum ."</br>";
echo "$numOne + $numTwo = $sum </br>";
echo $numTwo. " - " .$numOne. " = ". $sub ."</br>";
echo $numOne. " / " .$numTwo. " = ". $numOne/$numTwo ."</br>";
echo $numTwo. " / " .$numOne. " = ". $numTwo/$numOne ."</br></br>";
?>

<?php
//var_dump() en print-r():
$var = "Harry";
$age = 28;

echo "string(".strlen($var).") ".$var;
echo "</br>";
//dit geeft bijna hetzelfde
var_dump ($var);
echo "</br>";
var_dump($age); 
echo "</br>";
$var=null;
var_dump ($var);
echo "</br></br>";
?>


<?php
//gettype: variable data types
    $whatsthis = "george";
    echo "Value type is ".gettype ($whatsthis) . ".</br>\n";
    $whatsthis = 42.314;
    echo 'Value type is '.gettype ($whatsthis) . ".</br>\n";
    $whatsthis = null;
    echo 'Value type is '.gettype ($whatsthis) . '.</br>\n';
//merk op verschillende soorten quotes, escape char \ en \n voor betere source code leesbaarheid

?>

</body>
</html>
