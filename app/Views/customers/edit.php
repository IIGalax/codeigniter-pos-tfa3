<?php helper('form'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>

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

    <h1>Edit Customer</h1>

    <?= validation_list_errors() ?>

    <form action="<?= site_url('customers/update/' . $customer['id']) ?>" method="post">

        <label for="full_name">Full Name:</label><br>
        <input
            type="text"
            id="full_name"
            name="full_name"
            value="<?= esc($customer['full_name']) ?>"
        >

        <br><br>

        <label for="email">Email:</label><br>
        <input
            type="email"
            id="email"
            name="email"
            value="<?= esc($customer['email']) ?>"
        >

        <br><br>

        <label for="phone">Phone:</label><br>
        <input
            type="text"
            id="phone"
            name="phone"
            value="<?= esc($customer['phone']) ?>"
        >

        <br><br>

        <button type="submit">Update Customer</button>
    </form>

    <br>

    <a href="<?= site_url('customers') ?>">Back to Customers</a>

</body>
</html>