<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

<h1>All Tasks</h1>

<nav>
    <a href="<?= site_url('/') ?>">Welcome</a> |
    <a href="<?= site_url('tasks') ?>">Task List</a> |
    <a href="<?= site_url('profile') ?>">Profile</a> |
    <a href="<?= site_url('about') ?>">About</a>
</nav>

<table border="1" cellpadding="8">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>