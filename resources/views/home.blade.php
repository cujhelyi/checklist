<!doctype html>

<title>Checklist</title>

<link rel ="stylesheet" href="/app.css">
<script src="/app.js"></script>
<body>
    <?php foreach ($tasks as $task) : ?>
        <article>
            <?= $task;?>
        </article>
    <?php endforeach; ?>

</body>
