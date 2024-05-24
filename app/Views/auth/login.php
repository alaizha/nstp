<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($validation)): ?>
        <div>
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>
    <?php if (isset($error)): ?>
        <div>
            <?= $error ?>
        </div>
    <?php endif; ?>
    <form action="/auth/login" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= set_value('email') ?>"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
