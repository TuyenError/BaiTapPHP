<?php
include "class.database.php";
global $conn;
?>
<html>

<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="login-box">
        <img src="avatar.png" class="avatar">
        <?php
        if ($_POST) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = mysqli_query($conn, "SELECT * from User where email='$username' and password='$password' ");
            $row = mysqli_fetch_assoc($result);
            // var_dump($row);
            // die;
            if ($row) {
                header("Location: https://www.youtube.com/");
                exit;
            } else {
                echo "<p style='color: red; text-align: center'> Username or password is incorrect ! <p> <br> ";
            }

        }
        ?>
        <h1>Login Here</h1>
        <form method='post'>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot Password</a>
        </form>

    </div>
    <?php
    // if(isset($_POST['submit'])) {
    //     $name = $_POST['username'];
    //     $password = $_POST['password'];
    //     if ($name ==  'Antupnv24b' && $password == '123456') {
    //         echo "<script> alert('Logged in successfully !') </script>";
    //     }
    //     else {
    //         echo "<script> alert('Login failed !') </script>";
    //     }
    // } 
    ?>
</body>

</html>