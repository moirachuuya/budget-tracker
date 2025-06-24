<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="/register" method="POST">
        <label for="first_name">
            First Name:<br>
            <input type="text" name="first_name" id="first_name" required>
        </label>
        <br><br>

        <label for="middle_name">
            Middle Name (Optional):<br>
            <input type="text" name="middle_name" id="middle_name">
        </label>
        <br><br>

        <label for="last_name">
            Last Name:<br>
            <input type="text" name="middle_name" id="last_name" required>
        </label>
        <br><br>

        <label for="email">
            Email:<br>
            <input type="email" name="email" id="email" required>
        </label>
        <br><br>

        <label for="phone_number">
            Phone Number:<br>
            <input type="tel" name="phone_number" id="phone_number" required>
        </label>
        <br><br>

        <label for="password">
            Password:<br>
            <input type="password" name="password" id="password" required>
        </label>
        <br><br>

        <label for="confirm_password">
            Confirm Password:<br>
            <input type="password" name="confirm_password" id="confirm-password" required>
        </label>
        <br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>