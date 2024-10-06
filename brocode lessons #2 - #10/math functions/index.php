<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>X:</label>
        <input type="text" name="x">
        <label>Y:</label>
        <input type="text" name="y">
        <label>Z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form><br>

    <form action="index.php" method="post">
        <label>Radius</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    /* The abs() function returns the absolute value of the passed variable. The absolute value of a number is the value without regard to positive or negative notation. This can be  an integer or a floating-point number; abs() returns the same type that was passed to it. */
    // $total = abs($x);

    /* Returns the rounded value of num to specified precision (number of digits after the decimal point). precision can also be negative or zero (default). */
    // $total = round($x);
    
    /* Returns the next lowest integer value (as float) by rounding down num if necessary. */
    // $total = floor($x);
    
    /* Returns the next highest integer value by rounding up num if necessary. */
    // $total = ceil($x);

    // next bit requires both the input tags to work

    /* Returns num raised to the power of exponent. */
    // $total = pow($x, $y);

    /* Returns the square root of num. also only need one input box for this btw */
    // $total = sqrt($x);
    
    /* If the first and only parameter is an array, max() returns the highest value in that array. If at least two parameters are provided, max() returns the biggest of these values. */
    // $total = max($x, $y, $z);
    
    /* min() returns the parameter value considered "lowest" according to standard comparisons. If multiple values of different types evaluate as equal (e.g. 0 and 'abc' ) the first provided to the function will be returned. */
    // $total = min($x, $y, $z);

    /* just returns the pi number. useful if you ever need pi i guess */
    // $total = pi();
    
    /* If called without the optional min, max arguments rand() returns a pseudo-random integer between 0 and getrandmax(). If you want a random number between 5 and 15 (inclusive), for example, use rand(5, 15). */
    $total = rand(1, 100);

    echo"total = {$total} <br> <br>";

    $radius = $_POST["radius"];

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo"Circumference = {$circumference}cm <br>";
    echo"Area = {$area}cm^2 <br>";
    echo"Volume = {$volume}cm^3 <br>";
?>