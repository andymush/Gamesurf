<html>


    <head>

        <title>Gamer registration</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <link rel="shortcut icon" href="amin/img/icon.ico">
    </head>
    <body>
        
            <br></br>

            <br></br>

            <br></br>

            <br></br>

            <br></br>

        </form>
        <div class="reg-form">
        <h1>Register</h1>
        <form action="new_register.php" method="POST">
            <div class="textbox">
            <input type="text" name="first" placeholder="First name" required> 
            </div>

            <div class="textbox">
            <input type="text" name="second" placeholder="Second name" required>
            </div>

            <div class="textbox">
            <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="textbox">
            <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="textbox">
            <input type="text" name="game" placeholder="Game genre" required>
            </div>

            

            <input class="btn" type="submit" name="submit" value="Register">
        </form>

        <a href="login.php" style="color:red"><h3>Already a member?..LOGIN</h3></a>

    </div>
    </body>
</html>