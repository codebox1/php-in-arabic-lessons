<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <?php
        $name  = 'codebox';
        $age   = 15;
        $float = 1.2;
    ?>

    <h1> Welcome at <?= $name ?>, Mohammed has <?php echo $age; ?>, <?php print $float ?> </h1>
</body>
</html>