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
            <?php if(isset($errors['first_name'])): ?>
                <?php foreach($errors['first_name'] as $error): ?>
                    <p style="color:red; font-family:'Arial'; font-size: 10px;">
                        First name <?= htmlspecialchars($error) ?>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
        <br><br>

        <label for="middle_name">
            Middle Name (Optional):<br>
            <input type="text" name="middle_name" id="middle_name">
        </label>
            <?php if(isset($errors['middle_name'])): ?>
                <?php foreach($errors['middle_name'] as $error): ?>
                    <p style="color:red; font-family:'Arial'; font-size: 10px;">
                        Middle name <?= htmlspecialchars($error) ?>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
        <br><br>

        <label for="last_name">
            Last Name:<br>
            <input type="text" name="last_name" id="last_name" required>
        </label>
            <?php if(isset($errors['last_name'])): ?>
                <?php foreach($errors['last_name'] as $error): ?>
                    <p style="color:red; font-family:'Arial'; font-size: 10px;">
                        Last name <?= htmlspecialchars($error) ?>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
        <br><br>

        <label for="username">
            Username:<br>
            <input type="text" name="username" id="username" required>
        </label>
            <?php if(isset($errors['username'])): ?>
                <?php foreach($errors['username'] as $error): ?>
                    <p style="color:red; font-family:'Arial'; font-size: 10px;">
                        <?= htmlspecialchars($error) ?>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
        <br><br>

        <label for="email">
            Email:<br>
            <input type="email" name="email" id="email" required>
        </label>
            <?php if(isset($errors['email'])): ?>
                <p style="color:red; font-family:'Arial'; font-size: 10px;"><?=$errors['email']?></p>
            <?php endif; ?>
        <br><br>

        <label for="phone_number">
            Phone Number:<br>
            <input type="tel" name="phone_number" id="phone_number" placeholder="eg. 09XXXXXXXXX" required>
        </label>
            <?php if(isset($errors['phone_number'])): ?>
                <p style="color:red; font-family:'Arial'; font-size: 10px;"><?=$errors['phone_number']?></p>
            <?php endif; ?>
        <br><br>

        <label for="password">
            Password:<br>
            <input type="password" name="password" id="password" required>
        </label>
            <?php if(isset($errors['password'])): ?>
                <?php foreach($errors['password'] as $error): ?>
                    <p style="color:red; font-family:'Arial'; font-size: 10px;">
                        <?= htmlspecialchars($error) ?>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
        <br><br>

        <label for="confirm_password">
            Confirm Password:<br>
            <input type="password" name="confirm_password" id="confirm-password" onpaste="return false;" oncopy="return false;" oncut="return false;" required>
        </label>
        <br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>