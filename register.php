<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Welecome to Register Webpage </title>
    </head>
    <body>
        <form id="loginForm" action="register.php" method="post">
        <h3>Login to your account</h3>
            <p>
                <label for="loginUsername">Username</label>
                <input type="text" name="loginUsername" value="" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input type="password" name="loginPassword" value="" required>
            </p>
            <button type="submit" name="button">Log In</button>
        </form>

        <form id="registrationForm" action="register.php" method="post">
        <h3>Create your account now</h3>
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" value="" required>
            </p>
            <p>
                <label for="lastname">lastname</label>
                <input type="text" name="lastname" value="" required>
            </p>
            <p>
                <label for="firstname">firstname</label>
                <input type="text" name="firstname" value="" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" value="" required>
            </p>
            <p>
                <label for="email2">Confirm Email</label>
                <input type="email2" name="email2" value="" required>
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" name="password" value="" required>
            </p>

            <p>
                <label for="password">Confirm Password</label>
                <input type="password" name="password" value="" required>
            </p>
            <button type="submit" name="button">Sign Up</button>
        </form>



    </body>
</html>
