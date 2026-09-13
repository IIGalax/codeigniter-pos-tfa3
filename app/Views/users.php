<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <h1>User Accounts</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['role'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customers</a> |
        <a href="/users">Users</a>
    </nav>
</body>
</html>