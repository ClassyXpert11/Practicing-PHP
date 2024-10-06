<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    // echo strrpos('Hello World', 'o');
    $age = 90;

    if ($age >= 100) {
        echo"You are too old to enter this site<br>";
    } elseif ($age >= 18) {
        echo"You may enter this site<br>";
    } elseif ($age <= 0) {
        echo"{$age} is not a valid age<br>";
    } else {
        echo"You must be 18+ to enter<br>";
    }

    $adult = true;

    if ($adult) {
        echo"You may enter this site<br>";
    } else {
        echo"You must be an adult to enter<br>";
    }

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;
    
    if ($hours <= 0) {
        $weekly_pay = 0;
    } elseif ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    } else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo"You made £{$weekly_pay} this week<br>";

?>