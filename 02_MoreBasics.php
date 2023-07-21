<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        
        max-width : 80%;
        background-color : rgb(244, 167, 180);
        margin: auto; /* aligns division automatically */
        padding: 10pt;
    }
</style>
<body>

    <div class="container"> 
        <!-- div.name automatically creates a division with class called name -->
        <h1> Let's Learn about PHP</h1>
        <p> Your party status is here: </p>
    <?php

    echo "<br>";
    $age = 20;
    if($age > 21){
        echo "you can go to party";
    }
    else {
        echo "you can not go to party";
    }

    $languages = array("Python", "C++", "Java", "PHP", "NodeJS");

    $num = count($languages);
    echo "<br>";

    echo $languages[3];
    echo "<br>";

    echo "there are total "  ;
    echo $num;
    echo " languages in the array";

    $a=0;
    echo "<br>";
    while ($a <= 10) {
        echo "<br>The value of a is : ";
        echo $a;
        $a++;
    }
    echo "<br>";

    $a=0;
    while ($a < count($languages)) {
        echo "<br>The value of a is : ";
        echo $languages[$a];
        $a++;
    }
    echo "<br>";

    for ($a=0; $a < 10; $a++) { 
        echo "<br>The value of a for the for loop is : ";
        echo $a;
    }
    echo "<br>";

    foreach ($languages /*array*/ as $values) {
        echo "<br> the value from foreach loop is:  ";
        echo $values; #values represent value of array element
    }

    function print_($num){
        echo "<br>The number is: ";
        echo $num;
    }

    print_(20);
    echo "<br>";
    
    ?>
    </div>

</body>
</html>