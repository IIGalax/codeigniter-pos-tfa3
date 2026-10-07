<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

<h1>Tasks for Today</h1>

<nav>
    <a href="<?= site_url('/') ?>">Welcome</a> |
    <a href="<?= site_url('tasks') ?>">Task List</a> |
    <a href="<?= site_url('profile') ?>">Profile</a> |
    <a href="<?= site_url('about') ?>">About</a>
</nav>

<h2>Today's Tasks</h2>

<?php if (!empty($tasks)): ?>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?= esc($task['title']) ?>
                - <?= esc($task['status']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No tasks for today.</p>
<?php endif; ?>

</body>
</html>