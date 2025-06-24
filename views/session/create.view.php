<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
<h1>Login</h1>
    <form action="/login" method="POST">
        <label for="email">
            Email:<br>
            <input type="email" name="email" required>
        </label>
        <br><br>

        <label for="password">
            Password:<br>
            <input type="password" name="password" required>
        </label>
        <br><br>

        <button type="submit">Login</button>
</form>
</body>
</html>