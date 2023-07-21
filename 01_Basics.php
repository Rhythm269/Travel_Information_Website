<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>
<body>
    This is my first php website
    <?php

    define('pi', 3.14); // defining constant
    define ("si", 5.15);

    echo "Hello World. This is printed using php <br>";
    $var1 = 5;
    $var2 = 2;

    Echo $var1;
    ECHO $var2;
    echo $var1 + $var2;

    echo "<br>";

    // Arithmetic operators
    echo "The value of var1 + var2 is: ";
    echo $var1 + $var2;
    echo "<br>";

    echo "The value of var1 - var2 is: ";
    echo $var1 - $var2;
    echo "<br>";

    echo "The value of var1 * var2 is: ";
    echo $var1 * $var2;
    echo "<br>";

    echo "The value of var1 / var2 is: ";
    echo $var1 / $var2;
    echo "<br>";

    //Assignment Operator
    $newV = $var1;
    echo "The value of new variable newV is: ";
    echo $newV;
    echo "<br>";

    $newV += 1;
    echo "The new value of new variable newV is: ";
    echo $newV;
    echo "<br>";

    // -= , +=, *=, /=

    //Comparision operators
    echo "The value of 1==4 is: ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is: ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is: ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is: ";
    echo var_dump(1<=4);
    echo "<br>";

    //increment & decrement operators
    echo $var1++; //prints var1 then increases value by 1 (var 1 prints 5 becomes 6)
    echo $var1--;//prints var1 then decreases value by 1 (var 1 prints 6 becomes 5)
    echo ++$var1;//increases var1 then prints (var 1 becomes 6 and print 6)
    echo --$var1;//decreases var1 then prints (var 1 becomes 5 and print 5)
    echo "<br>";

    //logical operator
    /*  and (&&)
        or (||)
        xor
        not (!) */
    //AND OPERATOR

    $var3 = (true and true);
    echo $var3;
    echo "<br>";
    echo var_dump($var3); //var_dump returns true/false values
    echo "<br>";
    $var3 = (true and false);
    echo var_dump($var3);
    echo "<br>";
    $var3 = (false and false);
    echo var_dump($var3);
    echo "<br>";

    //OR OPERATOR

    $var3 = (true OR true);
    echo $var3;
    echo "<br>";
    echo var_dump($var3);
    echo "<br>";
    $var3 = (true OR false);
    echo var_dump($var3);
    echo "<br>";
    $var3 = (false OR false);
    echo var_dump($var3);
    echo "<br>";    

    //xor operator (false at both true or false)
    echo "<br>";
    $var3 = (true XOR true);
    echo var_dump($var3);
    echo "<br>";
    $var3 = (true XOR false);
    echo var_dump($var3);
    echo "<br>";
    $var3 = (false XOR false);
    echo var_dump($var3);
    echo "<br>"; 
    $var3 = (false XOR true);
    echo var_dump($var3);
    echo "<br>";  


    ?>

    <?php

    //echo "Hello World again";
    // hjkjhgf              Ctrl + /  comments out selected lines

    //primary data types in php
    // 1. string
    // 2. boolean
    // 3. array
    // 4. object
    // 5. integer
    // 6. float
    echo "<br>";
    $var3 = "This is a string";
    echo var_dump($var3);
    echo "<br>";
    
    $var3 = 13;
    echo var_dump($var3);
    echo "<br>";

    $var3 = 15.1;
    echo var_dump($var3);
    echo "<br>";

    $var3 = true;
    echo var_dump($var3);
    echo "<br>";

    echo pi;
    echo "<br>";
    echo si;
    ?>
</body>
</html>