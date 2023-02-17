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
<form method="post" action="login.php">
  </fieldset>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" placeholder="username" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" placeholder="password" id="password" name="password" required>
    </div>
    <input type="submit" value="Login">
      <legend></legend>
    </fieldset>
</form>
<?php
// Xử lý đăng nhập
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    if ($username === 'admin' && $password === '123456') {
        // Nếu thông tin đăng nhập hợp lệ, thực hiện chuyển hướng đến trang khác
        header('Location: https://tuyenerror.github.io/');
        exit;
    } else {
        // Nếu thông tin đăng nhập không hợp lệ, hiển thị thông báo lỗi
        echo 'Invalid username or password';
    }
}
?>
