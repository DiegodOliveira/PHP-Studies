<?php

$grade = "F";

switch($grade){
    case "A":
        echo "Good";
        break;
    case "B":
        echo "Nice";
        break;
    case "C":
        echo "Fine i guess";
        break;
    case "D":
        echo "Not so good";
        break;
    case "F":
        echo "Bad";
        break;
    default:
    echo "{$grade} is not valid";
}

?>