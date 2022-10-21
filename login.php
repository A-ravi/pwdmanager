<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pwdmanager | Login page</title>
    <style>
        body{
            text-align:center;
        }

    </style>
</head>
<body>
    <h1>Login page</h1>
    <form action="">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Enter your Username" ><br><br>
        <label for="password">Password</label><br>
        <input type="text" name="password" id="password" placeholder="Enter your Password" ><br><br>
        <input type="submit" value="Login"><br>

        <input type="checkbox" id="remeber-me" name="remeber-me" value="remeber-me">
        <label for="remeber-me">Remember Me</label>
        <a href="forgot_password.php">Forgot password?</a>
    </form>
    
</body>
</html>