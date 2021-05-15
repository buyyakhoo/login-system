<?php
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

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

    <title>Home</title>
</head>
<body>
        <h1>Hello, <?php echo $_SESSION['name']; ?> </h1> <br>
        <a href="logout.php"> Logout </a>
    
</body>
</html>
<?php
    } else {
        header('Location: index.php');
        exit();
    }
?>