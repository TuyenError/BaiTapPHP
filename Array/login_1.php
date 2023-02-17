<!-- // Kiểm tra thông tin đăng nhập
// Nếu thông tin đăng nhập hợp lệ, thực hiện chuyển hướng đến trang khác
// Nếu thông tin đăng nhập không hợp lệ, hiển thị thông báo lỗi -->
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
<form action="login_1.php" method="post">
    <fieldset>
        <legend>Login </legend>
        <input type="text" name="username" placeholder="Username" id="username" required >
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login" name="btn">

    </fieldset>
</form>
<?php
if (isset($_POST['btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === 'Timmy' && $password === '123456') {
        
        header('Location: https://tuyenerror.github.io/');
        exit;
    } else { 
        echo 'Invalid username or password';
    }
}
?>