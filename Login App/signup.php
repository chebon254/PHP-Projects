<?php 
     // Code here
     session_start();
    include("connection.php");
    include("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        # code...
        // Something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
            // Save to database
            $user_id = random_num(20);
            $query = "INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES (NULL, '$user_id', '$user_name, '$password', current_timestamp())";

            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        } else{
            echo "Please enter some valid information";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

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

    <div class="login-container">
        <div id="box">
        <span class="login-head">Sign Up</span>
            <form action="POST">
                <label>Username</label>
                <input type="text" name="user_name">
                <label>Password</label>
                <input type="password" name="password">
                <button type="submit">Login</button>
                <p>Don't have an Account? <a href="login.php"> Sign In</a></p>
            </form>
        </div>
    </div>
    <!-- == Script == -->
    <script src="js/script.js"></script>
</body>
</html>