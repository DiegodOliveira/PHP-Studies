<?php

    $foods = array("apple","orange","banana","coconut");

        // echo $foods[1];
        // $foods[0] = "strawberry";
        // array_push($foods, "pineaple", "kiwi");
        // array_pop($foods);
        // array_shift($foods);
        $reversed_foods = array_reverse($foods);

        foreach($foods as $food){
            echo $food . "<br>";
        }

        echo count($foods);
?>