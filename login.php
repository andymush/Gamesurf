
<html>

<head>

    <meta charset="utf-8">
    <title>GameSurf</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="amin/img/icon.ico">
</head>

<body>
    <div class="login-form">
        <h1>Login</h1>
        <form action="process_login.php" method="POST">
            <div class="textbox">
            <input type="text" placeholder="Username" name="username" value="" required>
            </div>

            <div class="textbox">
            <input type="password" placeholder="Password" name="pass" value="" required>
            </div>

            <input class="btn" type="submit" name="submit" value="Sign in">
        </form>

        <a href="register.php" style="color:red"><h2>New Member</h2></a>

    </div>

</body>

</html>
