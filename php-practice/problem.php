<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Problem Solving</title>
</head>
<body>
   <?php
   /*Write a PHP script that outputs the following text:
Welcome to the world of PHP! My name is [Your Name] and I am learning PHP.
You should:

Assign your name to a variable and use that variable in the message.
Use concatenation to join different parts of the string. */
$name = "Snigdho Saha";
print("Welcome to the world of PHP! My name is $name and I am learning PHP.");

 /* Problem 2: Variable Data Types
Task:
Create variables of different data types (integer, string, float, and boolean). Then, use var_dump() to output the type and value of each variable.

Integer: 10
String: "PHP is fun!"
Float: 3.14
Boolean: true */
$a = 10;
$b = "PHP is fun!" ;
$c =3.14;
$d = true;

 echo var_dump($a) ;
 echo var_dump($b) ;
 echo var_dump($c) ;
 echo var_dump($d) ;
 echo "<br>";

/*Problem 4: String Manipulation
Task:
Write a PHP script that:

Assigns the string "PHP is awesome!" to a variable $message.
Prints the length of the string using strlen().
Converts the string to uppercase and prints it.
Replaces the word "awesome" with "fantastic" and prints the new string. */
$message = "PHP is awesome!";
echo strlen($message);
echo strtoupper ($message);
echo "<br>";
echo str_replace("awesome","fantastic", $message);


/*Problem 5: Variable Scope (Global vs Local)
Task:
Create a PHP script where you:

Define a global variable $city with a value of "New York".
Define a function printCity() inside which you define a local variable $city with the value "Los Angeles".
Inside the function, print the value of the local $city.
Outside the function, print the value of the global $city.
Show what happens when you try to print the local $city outside the function (hint: error or not defined). */
// Define a global variable $city
$city = "New York";

// Define a function printCity
function printCity() {
    // Define a local variable $city inside the function
    $city = "Los Angeles";
    
    // Print the value of the local $city
    echo "Inside function: " . $city . "<br>";
}

// Call the function to print the local $city
printCity();

// Print the value of the global $city
echo "Outside function: " . $GLOBALS['city'] . "<br>";

// Attempt to print the local $city outside the function (this will not work)
echo "Trying to print local \$city outside function: " . $city . "<br>";
?> 
</body>
</html>