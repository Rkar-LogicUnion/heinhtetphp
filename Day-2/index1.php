<?php

    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $age=$_GET['age'];

        echo $name.$age;
    }
    echo "Hello";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="number" name="num">
        <input type="submit">
    </form>
</body>
</html>