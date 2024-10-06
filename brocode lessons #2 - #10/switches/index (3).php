<?php

    // The switch statement is a replacement to using many elseif statements more efficient, less code to write

    // the break statement is important to add afterwards so that you can break out of the--
    // switch case otherwise it will just print out everything after it

    $grade = "D";

    switch ($grade) {
        case 'A':
            echo"You did great <br>";
            break;
        case 'B':
            echo"You did good <br>";
            break;
        case 'C':
            echo"You did okay <br>";
            break;
        case 'D':
            echo"You did alright <br>";
            break;
        case 'F':
            echo"You failed <br>";
            break;
        default:
        echo"{$grade} is not valid <br>";
    }


    // "l" just says which day it is today
    $date = date("l");

    switch ($date) {
        case 'Monday':
            echo"I don't mind Mondays";
            break;
        case 'Tuesday':
            echo"It is taco Tuesday";
            break;
        case 'Wednesday':
            echo"The work week is half over";
            break;
        case 'Thursday':
            echo"It's almost the weekend";
            break;
        case 'Friday':
            echo"The weekend is here";
            break;
        case 'Saturday':
            echo"Time to play GOWR";
            break;
        case 'Sunday':
            echo"Time to chillout";
            break;
        default:
        echo"{$date} is NOT a date";
    }
?>