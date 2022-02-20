<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Page</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>
        <form action="signupacc.php" method="post">            
            <h2>Sign Up</h2>
            <Label>Name</Label>
            <input type="text" name="name" placeholder="Name"><br>

            <Label>User Name</Label>
            <input type="text" name="uname" placeholder="User Name"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Sign Up</button>
            <button id="btn_2" type="submit" formaction="loginPage.php">Back</button>
        </form>
    </body>
</html>