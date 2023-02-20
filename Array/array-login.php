
<style>
body{
  font-family:Arial ;
  background-color:LightBlue;
}
fieldset{
  width:300px;
  margin:0 auto;
  border: none;
  padding: 0 0 10px 0;
  background-color: white;
}
form{
 background-color:white;
  width:300px;
  padding:40px 10px 0 10px;
  margin: 0 auto;
  border-radius: 4px;
}
input{
  display: block;
  border: none;
  margin: 20px auto;
  width: 280px;
  background-color: #eaeaea;
  padding: 15px 0;
  text-align: center;
  font-size: 18px;
  border-radius: 4px;
}
legend{
  width: 100%;
  text-align: center;
  font-size: 30px;
  font-weigth:bold;
  color:#777;
}
input[type="submit"]{
   background-color:red;
   color:white;
   cursor: pointer;
  } 

</style>
<fieldset>
<form method="post" action="array-login.php">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Login" name="btn">
</form>
</fieldset>
<?php
$users = array(
    "Timmy" => "1234",
    "Tuyen" => "5678",
    "Error" => "9123"
);

if (isset($_POST['btn'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (isset($users[$username]) && $users[$username] == $password) {
        header("Location: https://tuyenerror.github.io/");
        exit();
    } else {
        echo "Login failed. Please try again.";
    }
}
?>

