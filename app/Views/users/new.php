<?php helper('form'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>New User</title>

    <style>
        body {
            color: black;
            background-color: white;
            font-family: Arial, sans-serif;
        }

        input {
            color: black;
            background-color: white;
            border: 1px solid black;
            padding: 6px;
        }

        button {
            color: black;
            background-color: white;
            border: 1px solid black;
            padding: 6px 12px;
            cursor: pointer;
        }

        a {
            color: blue;
        }
    </style>
</head>
<body>

    <h1>Add New User</h1>

    <?= validation_list_errors() ?>

    <form action="<?= site_url('users/create') ?>" method="post">

        <label for="username">Username:</label><br>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= old('username') ?>"
        >

        <br><br>

        <label for="full_name">Full Name:</label><br>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= old('full_name') ?>"
        >

        <br><br>

        <label for="email">Email:</label><br>
        <input
            type="email"
            id="email"
            name="email"
            value="<?= old('email') ?>"
        >

        <br><br>

        <label for="password">Password (min 8 characters):</label><br>
        <input type="password" id="password" name="password">

        <br><br>

        <button type="submit">Save User</button>
    </form>

    <br>

    <a href="<?= site_url('users') ?>">Back to Users</a>

</body>
</html>