 <?php

    $foods = array("apple", "banana", "orange", "coconut");

    // $foods[0] = "pineapple";
    // just replaces the first item in the array

    // array_push($foods, "pineapple", "kiwi");
    // adds these items to the end of the array, similar to append() in python

    // array_pop($foods);
    // gets rid of the last element in an array i think

    // array_shift($foods);
    // it shifts the array by one, basically gets rid of the first element lol

    // $foods = array_reverse($foods);
    // this just reveres the array
    
    // echo count($foods);
    // this just counts the items in an array

    foreach ($foods as $food) {
        echo$food . "<br>";
    }
?>