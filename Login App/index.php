<?php 
    // Code here
    session_start();
      // Code here
      session_start();
      include("connection.php");
      include("functions.php");
  
      $user_data = check_login($con);

    $_SESSION;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Login</title>

    <!-- == Favicon == -->
    <link rel="shortcut icon" href="css/img/php.png">

    <!-- == Style Sheet == -->
    <link rel="stylesheet" href="css/style.css">

     <!-- == Fonts == -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>This is the Home page</h1>

    <br>

    Hello, <?php echo $user_data['user_name']; ?>
    <!-- == Script == -->
    <script src="js/script.js"></script>
</body>
</html>