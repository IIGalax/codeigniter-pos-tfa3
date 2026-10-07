<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h1>Profile</h1>

<nav>
    <a href="<?= site_url('/') ?>">Welcome</a> |
    <a href="<?= site_url('tasks') ?>">Task List</a> |
    <a href="<?= site_url('profile') ?>">Profile</a> |
    <a href="<?= site_url('about') ?>">About</a>
</nav>

<h2><?= esc($user['full_name']) ?></h2>

<p><strong>Username:</strong> <?= esc($user['username']) ?></p>
<p><strong>Email:</strong> <?= esc($user['email']) ?></p>

</body>
</html>