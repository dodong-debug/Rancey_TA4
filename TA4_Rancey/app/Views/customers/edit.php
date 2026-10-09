<?php
/**
 * @var array $customer
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
    <h1>Edit Customer</h1>
    <a href="/customers">Back to Customers</a>
    <hr>

    <form action="/customers/update/<?= $customer['id'] ?>" method="post">
        <?= csrf_field() ?>
        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="<?= esc($customer['full_name']) ?>">
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?= esc($customer['email']) ?>">
        </p>
        <p>
            <button type="submit">Update Customer</button>
        </p>
    </form>
</body>
</html>