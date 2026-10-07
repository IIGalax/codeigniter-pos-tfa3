<?php helper('form'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>

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

    <h1>Edit User</h1>

    <?= validation_list_errors() ?>

    <form
        action="<?= site_url('users/update/' . $user['id']) ?>"
        method="post"
        enctype="multipart/form-data"
    >

        <label for="username">Username:</label><br>
        <input
            type="text"
            id="username"
            name="username"
            value="<?= esc($user['username']) ?>"
        >

        <br><br>

        <label for="full_name">Full Name:</label><br>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= esc($user['full_name']) ?>"
        >

        <br><br>

        <label for="email">Email:</label><br>
        <input
            type="email"
            id="email"
            name="email"
            value="<?= esc($user['email']) ?>"
        >

        <br><br>

        <label for="avatar">Profile Picture JPG or PNG, maximum 2 MB:</label><br>
        <input
            type="file"
            id="avatar"
            name="avatar"
            accept=".jpg,.jpeg,.png"
        >

        <br><br>

        <button type="submit">Update User</button>
    </form>

    <br>

    <a href="<?= site_url('users') ?>">Back to Users</a>

</body>
</html>