<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercises</title>

    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body>
    <?php
        // Subject Degrees
        $arabic  = 50;
        $english = 50;
        $math    = 50;

        // Student degree
        $degrees = array(45, 40, 25);

        // Student name
        $name = 'Khaled Ashraf';

        // Minus 
        $sub = 4;

        // Additional degree
        $add = 0;

        // total of subjects
        $subjects = $arabic + $english + $math;

        // total degrees of the students
        $total = $degrees[0] + $degrees[1] + $degrees[2];

        // add degrees to total
        $total += $add;

        // sub
        $total -= $sub;

        $percen = 0;
        if($subjects != 0 && $total != 0){
            $percen = ($total / $subjects) * 100;
        }

        // Give status
        $status = '';
        if($percen >= 85){
            $status = 'A';
        }elseif($percen >= 70 && $percen < 85){
            $status = 'B';
        }elseif($percen >= 60 && $percen < 70){
            $status = 'C';
        }elseif($percen >= 50 && $percen < 60){
            $status = 'D';
        }else{
            $status = 'F';
        }
    ?>

<table >
  <tr>
    <th>Student Name</th>
    <th>Final Degree</th>
    <th>percentage</th>
    <th>Status</th>
    <th>Minus</th>
    <th>Additional Degrees</th>
    <th>Arabic</th>
    <th>English</th>
    <th>Math</th>
  </tr>
  <tr>
    <td><?= $name ?></td>
    <td><?= $total ?></td>
    <td><?= $percen ?>%</td>
    <td><?= $status ?></td>
    <td><?= $sub ?></td>
    <td><?= $add == 0 ? '-' : $add; ?></td>
    <td><?= $degrees[0] ?></td>
    <td><?= $degrees[1] ?></td>
    <td><?= $degrees[2] ?></td>
  </tr>
</table>

</body>
</html>