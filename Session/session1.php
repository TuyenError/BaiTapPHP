<?php
session_start();
?>

<form action="session2.php" method="post">
    <input type="text" name="user" /><br>
    <input type="submit" name="btn" value="Chào" />
</form>
<?php
if (isset($_POST['user'])) {
    $name = $_POST['user'];
    $_SESSION['t'] = $name;
    header("Location: session2.php");
    exit();
}
?>