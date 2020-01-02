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
    <h1>Task of the day</h1>

    <ul>
        <?php foreach($task as $heading => $value) : ?>
            <li>
                <strong><?= ucwords($heading); ?></strong> <?= $value; ?>
            </li>
        <?php endforeach ?>
    </ul>



    <h1>Task of the day - manualy</h1>

    <ul>
        <li>
            <strong>Name: </strong><?= $task['title']; ?>
        </li>
        <li>
            <strong>Due date: </strong><?= $task['due']; ?>
        </li>
        <li>
            <strong>Person responsible: </strong><?= $task['assigned_to']; ?>
        </li>
        <li>
            <strong>Status: </strong>
            
            <?php if ($task['completed']) : ?>
                <?= '&#9989' ?>
            <?php else : ?>
                <?= 'Incomplete' ?>
            <?php endif; ?>
        </li>
    </ul>
</body>
</html>