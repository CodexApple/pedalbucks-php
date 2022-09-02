<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/Core.php';

if (isset($_POST['registerBtn'])) {
    if ($user->saveData()) {
        return header("Location: /auth/login?status=Success");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELW | Register</title>
</head>

<body>
    <form method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your username" /><br />
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" /><br />
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password" /><br />
        <input type="submit" name="registerBtn" value="Register" />
    </form>
</body>

</html>
