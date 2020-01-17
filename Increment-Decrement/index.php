<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Increment / Decrement</title>
</head>
<body>
    <?php
            // Pre
                // Increment
                $inc_pre = 2;
                $d_pre   = 5;
                echo ++$inc_pre;
                echo "<br>";
                echo $inc_pre;

                echo "<br>";

                // Decrement
                echo --$d_pre;
                echo "<br>";
                echo $d_pre;


            echo "<hr>";

            // Post
                // Increment
                $inc_post = 4;
                $d_post = 3;
                echo $inc_post++;
                echo "<br>";
                echo $inc_post;
                
                echo "<br>";

                 // Decrement
                 echo $d_post--;
                 echo "<br>";
                 echo $d_post;
    ?>
</body>
</html>