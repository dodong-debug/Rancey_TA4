<?php
/**
 * @var array $users
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h1>User Accounts</h1>
    <a href="/users/new">+ Add New User</a> | <a href="/">Home</a>
    <hr>
    
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php if (!empty($users) && is_array($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['id']) ?></td>
                    <td>
                        <?php if (!empty($user['avatar'])): ?>
                            <img src="/uploads/<?= esc($user['avatar']) ?>" width="50">
                        <?php else: ?>
                            <span>No Image</span>
                        <?php endif; ?>
                    </td>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['email'] ?? '') ?></td>
                    <td>
                        <a href="/users/edit/<?= $user['id'] ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No users found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>