<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>


<?php

    $capitals =  array("USA" => "Washington D.C.",
                        "Japan" => "Kyoto",
                        "South Korea" => "Seul",
                        "India" => "New Delhi");

    // echo $capitals["South Korea"]
    //$capitals["China"] = "Beijing";
    // $values = array_values($capitals);

    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    // foreach($values as $value){
    //     echo "{$value} <br>";
    // }

    $capital = $capitals[$_POST["country"]];

    echo $capital;
?>