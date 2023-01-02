<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="newuser.php" method="POST">
        <label for="lastname">lastname</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="firstname">firstname</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="birth">birth</label>
        <input type="text" id="birth" name="birth" required>

        <label for="address">address</label>
        <input type="text" id="address" name="address" required>

        <label for="city">city</label>
        <input type="text" id="city" name="city" required>

        <label for="zip_code">zip_code</label>
        <input type="text" id="zip_code" name="zip_code" required>

        <label for="email">email</label>
        <input type="text" id="email" name="email" required>

        <label for="phone">phone</label>
        <input type="text" id="phone" name="phone" required>

        <label for="password">password</label>
        <input type="text" id="password" name="password" required>

        <label for="passwordConfirm">passwordConfirm</label>
        <input type="text" id="passwordConfirm" name="passwordConfirm" required>

        <input type="submit" value="Send">
    </form>
</body>
</html>