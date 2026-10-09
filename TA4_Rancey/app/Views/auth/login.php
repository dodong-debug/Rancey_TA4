<?php
/**
 * @var array|null $validation
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Staff Login</h1>
    
    <?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="/login/attempt" method="post">
        <?= csrf_field() ?>
        <p>
            <label>Username:</label><br>
            <input type="text" name="username" required>
        </p>
        <p>
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </p>
        <p>
            <button type="submit">Login</button>
        </p>
    </form>
</body>
</html>