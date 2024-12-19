<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo & Print Statement</title>
</head>
<body>
   <!-- PHP echo statement -->
    <?php
    echo "Hare Krishna<br>";
      // Using Multiple Perametre
    echo "Hare Krishna " , "Hare Krishna " , "Krishna Krishna " , "Hare Hare";
    ?>
     <!-- how to output text and variables with the echo statement -->
      <?php 
      $txt1 = "Hare Krishna";
      $txt2 = "Jay Shri Ram";
      
      echo "<h2>$txt1</h2>";
      echo "<p> $txt2</p>";
      ?>
 <!-- PHP print statement -->
     <?php
     // print statement can be used with or without parentheses: print or print()
     print "Hare Krishna <br>";
     //same as
     print("Hare Krishna <br>");
     /* how to output text and variables with the print statement*/
     $txt1 = "Hare Krishna";
     $txt2 = "Jay Shri Ram";

     print "$txt1<br>";
     print("Say $txt2")
     ?>
</body>
</html>