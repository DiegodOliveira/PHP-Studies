<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loop.php" method="post">
        <label>Enter a number to count down:</label><br>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>


<?php

    // for($i = null; $i < 5; $i++){
    //     echo "Hello <br>";
    // }

    $counter = $_POST["counter"];

    for($i = $counter;$i > 0;$i--){
        echo $i . "<br>";
    }

?>