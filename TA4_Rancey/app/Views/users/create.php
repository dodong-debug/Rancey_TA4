<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h1>Add New User</h1>
    <a href="/users">Back to Users</a>
    <hr>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/users/create" method="post">
        <?= csrf_field() ?>
        <p>
            <label>Username:</label><br>
            <input type="text" name="username" value="<?= old('username') ?>">
        </p>
        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="<?= old('full_name') ?>">
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?= old('email') ?>">
        </p>
        <p>
            <button type="submit">Save User</button>
        </p>
    </form>
</body>
</html>