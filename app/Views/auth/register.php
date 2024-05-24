<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <?php if (isset($validation)): ?>
        <div>
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>
    <!-- hello world -->
    <form action="/auth/register" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?= set_value('username') ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= set_value('email') ?>"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>

        <label for="password_confirm">Confirm Password:</label>
        <input type="password" name="password_confirm" id="password_confirm"><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
