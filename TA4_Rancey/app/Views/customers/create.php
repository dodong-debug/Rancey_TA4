<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
</head>
<body>
    <h1>Add New Customer</h1>
    <a href="/customers">Back to Customers</a>
    <hr>
    
    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/customers/create" method="post">
        <?= csrf_field() ?>
        <p>
            <label>Full Name:</label><br>
            <input type="text" name="full_name" value="<?= old('full_name') ?>">
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?= old('email') ?>">
        </p>
        <p>
            <button type="submit">Save Customer</button>
        </p>
    </form>
</body>
</html>