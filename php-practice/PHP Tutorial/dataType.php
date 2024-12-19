<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Type</title>
</head>
<body>
   <!--var_dump() function returns the data type and the value -->
   <?php
   $x = 108;
   var_dump($x);
   ?>
   <br>
   <!--PHP String -->
    <?php
    $x = "Hare Krishna";
    $y = 'Hare Krishna';
    
    var_dump($x);
    echo "<br>";
    var_dump($y);

    //PHP Integer
    $a = 7775;
    var_dump($a);

    //PHP Float
    $b = 67855.1696;
    var_dump( $b);

    //PHP Boolean
    $b = true;
    var_dump($b);
    echo "<br>";

    //Upper Case
    $c = "Hare Krishna";
    echo strtoupper($c);
    echo "<br>";

    //Lower Case
    $d = "Hare Krishna";
    echo strtolower($d);
    echo "<br>";

    //Replace String
    $e = " Hare Ram";
    echo str_replace ("Ram", "Krishna", $e);
    echo "<br>";

    //String Reverse
    $f = " maR maR ";
    echo strrev($f);
    echo trim($e)
    
    ?>
</body>
</html>