
<?php
session_start();
?>

<body>
    <h1>Delete User</h1>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <button type="submit">Delete</button>
    </form>
</body>
<?php
$user = array();
$user[0]['Username'] = "Daiy";
$user[0]['Password'] = "123";

$user[1]['Username'] = "Pietin";
$user[1]['Password'] = "111";

$user[2]['Username'] = "Sam";
$user[2]['Password'] = "123";

$user[3]['Username'] = "Lan";
$user[3]['Password'] = "321";

$user[4]['Username'] = "Alex";
$user[4]['Password'] = "";


if (isset($_SESSION["user"])) {
    $_SESSION["user"] = array();
}



// Xóa sản phẩm
if (isset($_POST["btn-delete"])) {
    $index = $_POST["index"];
    unset($_SESSION["user"][$index]);
    exit();
}

?>

<h1>Danh Sách</h1>
<table border="1">
    <tr>
        <th>Tên </th>
        <th>Mật Khẩu</th>
        <th></th>
    </tr>
    <?php foreach ($_SESSION["user"] as $index => $user) { ?>
            <tr>
                <td>
                    <?php echo $user["Username"]; ?>
                </td>
                <td>
                    <?php echo $user["Password"]; ?>
                </td>
                <td>
                    <form action="" method="POST" style="display: inline;">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <input type="submit" name="btn-delete" value="Xóa">
                    </form>
                </td>
            </tr>
    <?php } ?>
</table>



