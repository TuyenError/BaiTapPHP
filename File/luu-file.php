<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="file-up" accept=".jpg">
	<input type="submit" name="btn" value="upload_file">
</form>
<?php
if (isset($_POST['btn'])) {
	if (isset($_FILES['file-up'])){
		$file = $_FILES['file-up'];
		$namefile = $file['name'];
		move_uploaded_file($file['tmp_name'], $namefile);
		?>
		<img src="<?php echo $namefile ?>" height="100px" width="70px"/>
		<?php
	}

}
?>
