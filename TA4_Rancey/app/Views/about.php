<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | POS System</title>
</head>
<body>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('about') ?>">About</a> |
        <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('users') ?>">User Accounts</a>
    </nav>

    <hr>

    <h1>About</h1>

    <p>
        This Point-of-Sale System is a basic web application
        developed using CodeIgniter 4.
    </p>

    <p>
        The application demonstrates the use of routes,
        controllers, views, and static PHP arrays.
    </p>

</body>
</html>