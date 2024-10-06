<?php
    // && = True if both conditions are true
    // && = and
    // || = True if at least one condition is true
    // || = or
    //  ! = True is false. False if true. kinda just reverses the boolean value
    //  ! = not

    $temp = 15;
    $cloudy = false;

    if ($temp < 0 || $temp > 30) {
        echo"The weather is bad<br>";
    } else {
        echo"The weather is good<br>";
    }

    if (!$cloudy) {
        echo"It is sunny<br>";
    } else {
        echo"It is cloudy<br>";
    }

    $age = 19;
    $citizen = true;

    // if (!$age >= 18 || !$citizen) {
    if ($age >= 18 && $citizen) {
        echo"You can vote<br>";
    } else {
        echo"You cannot vote<br>";
    }

    $child = false;
    $senior = true;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 15;
    }

    echo"The ticket price is £{$ticket}";
?>