<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP practicioner</title>

    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul>
        <?php
            foreach($names as $name) {
                echo "<li> $name </li>";
            }
        ?>

        <?php foreach($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>