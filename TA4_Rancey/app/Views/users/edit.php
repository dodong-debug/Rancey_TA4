<?php
/**
 * @var array $user
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <a href="/users">Back to Users</a>
    <hr>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/users/update/<?= $user['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <p>
            <label>Username:</label><br>
            <input type="text" name="username" value="<?= esc($user['username']) ?>">
        </p>
        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="<?= esc($user['full_name']) ?>">
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?= esc($user['email']) ?>">
        </p>
        <p>
            <label>Profile Avatar (JPG/PNG max 2MB):</label><br>
            <?php if (!empty($user['avatar'])): ?>
                <br><img src="/uploads/<?= esc($user['avatar']) ?>" width="100"><br>
            <?php endif; ?>
            <input type="file" name="avatar">
        </p>
        <p>
            <button type="submit">Update User</button>
        </p>
    </form>
</body>
</html>