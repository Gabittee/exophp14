<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dark.css">
    <title>login</title>
</head>
<body>
    <input type="checkbox" name="darkmode" id="darkmode">
    <form action="login.php" method="POST">
        <label for="email">email</label>
        <input type="email" name="email" required>

        <label for="email">password</label>
        <input type="password" name="password" required>

        <input type="submit" value="login">
    </form>

    <script src="./darkmode.js"></script>
</body>
</html>

<?php

if (isset($_COOKIE['SESSION'])) {
    header("Location: page.php");
}

