<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <?php
    $color  = "red";
    echo "My car is". $color . "<br>"; #This choice will work because is it written in the correct way  
    echo "My house is". $COLOR . "<br>"; #COLOR wouldn't work because it is written in caps
    echo "My boat is". $coLOR . "<br>"; #This also wouldn't work because the variable it's written in a combination between lower case and upeer case letters
     ?>
</body>
</html>