<!DOCTYPE html>
<html>
<body>
<center>
    <?php
    $x = "Hare";
    $y = "Krishna";

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $txt = "Shri Krishna";
    echo "I love $txt!";
    echo "<br>";

    $x = "Jay ";
    $y = "Shri";
    $z = "Ram";
    echo $x . " " . $y . " " . $z;
    echo "<br>";

    echo "<p>Variable Type</p>";

    $x = 4;      // $x is an integer
    $y = "Hare"; // $y is a string
    echo $x;
    echo $y;
    echo '<br>';

    $x = 4;
    var_dump($x);
    echo "<br>";
    var_dump(4);
    echo "<br>";
    var_dump("Hare Krishna");
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([1, 0, 8, 1.07]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";

    // Assigning the same value to multiple variables
    $x = $y = $z = "Hare Krishna";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo $z;
    echo "<br>";

    // Fixed inline styling
    echo "<p style=\"background-color:Tomato;\">Variable Scope</p>";
    echo "<br>";

    // Global Scope Example
    $k = "Hare Krishna"; // global scope

    function MyTest() {
        // using x inside this function will generate an error
        echo "<p>You are  not virtuous. $k</p>";
    }

    MyTest();
    echo "<p>You are virtuous : $k</p>";
    echo "<br>";
    //Local Scope Example
    function myTests() {
        $j = "Hare Krishna"; // local scope
        echo "<p>You are virtuous: $j</p>";
      } 
      myTests();
      
      // using j outside the function will generate an error
      echo "<p>You are not virtuous. $j</p>";
    echo "<br>";
    $aa = "Hare";
$bb = "Krishna";

function myTest1() {
  global $aa, $bb,$s;
  $s = $aa." ". $bb;
} 

myTest1();  // run function
echo $s; // output the new value for variable $s
echo "<p style=\"background-color:Green;\">Variable Static Scope</p>";
    echo "<br>";
//Static Function
function myTest2() {
    static $ss = 0;
    echo $ss;
    $ss++;
  }
  
  myTest2();
  echo "<br>";
  myTest2();
  echo "<br>";
  myTest2();
  echo "<br>";
  myTest2();
  echo "<br>";
  myTest2();
?>

</center>
</body>
</html>
