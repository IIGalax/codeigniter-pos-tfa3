<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

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

        .error   { color: red; }
        .success { color: green; }
    </style>
</head>
<body>

    <h1>Staff Login</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p class="error"><?= esc(session()->getFlashdata('error')) ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <p class="success"><?= esc(session()->getFlashdata('success')) ?></p>
    <?php endif; ?>

    <form action="<?= site_url('login') ?>" method="post">
        <?= csrf_field() ?>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?= esc(old('username')) ?>">

        <br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password">

        <br><br>

        <button type="submit">Log In</button>
    </form>

</body>
</html>