<?php
    // $age = 15;

    // if ($age >= 18){
    //     echo "You may enter this site";  
    // }else if($age <= 18){
    //     echo "Do not enter";
    // }


    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    else if($hours <= 40){
        $weekly_pay = $hours * $rate; 
    }else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week"

?>