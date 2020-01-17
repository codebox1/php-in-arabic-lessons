<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch statement</title>
</head>
<body>
    <?php
        $n = 5;
        switch($n){
            case 3:
                echo 'n = 3';
            break;
            case 2:
                echo 'n = 2';
            break;
            default:
                echo 'n != 3 & n != 2';
        }
    ?>
</body>
</html>