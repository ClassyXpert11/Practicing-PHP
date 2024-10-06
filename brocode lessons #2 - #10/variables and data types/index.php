<?php
    $name = "Batman";
    $age = 19;
    $money = 89.50;
    $online = true;

    $batmobile_cost = 120000000;
    $batmobiles_owned = 2;
    $total = null;

    echo "I am the {$name} at age {$age} years old... currently got £{$money} in my pocket lol. <br>";
    echo "online status: {$online} <br>";
    echo "My Batmobile costs like \${$batmobile_cost}.<br>";
    /* in php if you put a dollar symbol before a variable name like this--
    -- ${$name} php will get confused and put a strikethrough to it.
    make sure to put a backwards slash before that first dollar sign to show you want it there
    something like this \${$name} 
    */
    $total = $batmobile_cost * $batmobiles_owned;
    echo"I also have two of them because ya know... i need a spare. in total thats like {$total}";
?>