<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS Login</title>
</head>
<body>

<h1>POS Login</h1>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<form method="post" action="<?= site_url('login') ?>">
    <?= csrf_field() ?>

    <p>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
    </p>

    <p>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </p>

    <button type="submit">Login</button>
</form>

</body>
</html>