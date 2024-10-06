<?php
    
    $counter = 0;

    // $counter++ is the same as $counter = $counter + 1
    // $counter-- is the same as $counter = $counter - 1
    // also able to do $counter+= and $counter-= 
    $counter++;
    // echo $counter;

    /*
        Operator precendece
        in php this is what would get solved first, same like BIDMAS
        1) ()
        2) **
        3) * / %
        4) + -
    */

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo$total;

?>