<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/login-system/style/style.css">

    <!-- Nunito font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <!-- error display when usename and password is wrong -->
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <!-- login form -->
        <label>Username</label>
        <input type="text" name="username" placeholder="Username">

        <label>Password</label>
        <input type="password" name="passwd" placeholder="Password">

        <button type="submit">Login</button> 
    </form>
    
</body>
</html>