<?php
/**
 * @var array $customers
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
</head>
<body>
    <h1>Customer Accounts</h1>
    <a href="/customers/new">+ Add New Customer</a> | <a href="/">Home</a>
    <hr>
    
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php if (!empty($customers) && is_array($customers)): ?>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['id']) ?></td>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td>
                        <a href="/customers/edit/<?= $customer['id'] ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No customers found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>