<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comparison Operation</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 5;
    ?>
    a == b 
    <?php
        var_dump($a == $b);
        echo "<br>";
    ?>
    a != b
    <?php
        var_dump($a != $b);
        echo "<br>";
    ?>

    a === b
    <?php
        var_dump($a === $b);
        echo "<br>";
    ?>

    a !== b
    <?php
        var_dump($a !== $b);
        echo "<br>";
    ?>
    a > b
    <?php
        var_dump($a > $b);
        echo "<br>";
    ?>

    a >= b
    <?php
        var_dump($a >= $b);
        echo "<br>";
    ?>
</body>
</html>