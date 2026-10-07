<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>

    <style>
        body {
            color: black;
            background-color: white;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #eeeeee;
        }

        .avatar {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border: 1px solid black;
        }

        a {
            color: blue;
        }
    </style>
</head>
<body>

    <h1>User Accounts</h1>

    <a href="<?= site_url('users/new') ?>">Add New User</a>

    <br><br>

    <table>
        <tr>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>

        <?php foreach ($users as $user): ?>
        <tr>
            <td>
                <?php
                    $avatar = !empty($user['avatar'])
                        ? $user['avatar']
                        : 'placeholder.svg';
                ?>

                <img
                    class="avatar"
                    src="<?= base_url('uploads/avatars/' . $avatar) ?>"
                    alt="User avatar"
                >
            </td>

            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['full_name']) ?></td>
            <td><?= esc($user['email']) ?></td>
            <td><?= esc($user['created_at']) ?></td>

            <td>
                <a href="<?= site_url('users/edit/' . $user['id']) ?>">
                    Edit
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('customers') ?>">Customers</a> |
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>

</body>
</html>