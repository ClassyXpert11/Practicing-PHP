<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php

    $capitals = array("USA"=>"Washington D.C",
                      "Japan"=>"Kyoto",
                      "South Korea"=>"Seoul",
                      "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];
    echo "The capital is {$capital}";

    // echo $capitals["Japan"];
    // will print out the the key (kyoto) of that value (japan)

    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "Bejing";
    // this is how you add / replace a value to a key
    
    // $keys = array_keys($capitals);

    // foreach ($keys as $key) {
    //     echo"{$key} <br>";
    // }
    // This will print only the keys from the accociative array
    
    // $values = array_values($capitals);

    // foreach ($values as $value) {
    //     echo"{$value} <br>";
    // }
    // this will print only the values from the accociative array

    // $capitals = array_flip($capitals);
    // this swaps the keys and values around so that the keys--
    // --become vales and vice versa
    
    // $capitals = array_reverse($capitals);
    // just reverses the order

    // foreach ($capitals as $key => $value) {
    //     echo"{$key} = {$value} <br>";
    // }


?>