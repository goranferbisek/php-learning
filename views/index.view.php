<?php require "partials/head.php" ?>

    <h1>Read tasks form database</h1>
    <ul>
        <?php foreach($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <s><?= $task->description ?></s>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?php require "partials/footer.php" ?>