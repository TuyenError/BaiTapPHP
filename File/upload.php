<form action="" method="Post" enctype="Multipart/from-data">
	<input type="file" name="file-up" accept=".jpg">
	<input type="submit" name="btn" value="upload_file">
</form>
<?php
if (isset($_POST['btn'])) {
	if (isset($_FILES['file-upe'])){
		$file = $_FILES['file-up'];
		$namefile = $file['file-up'];
		move_uploaded_file($file['tmp_name'], $namefile);
		?>
		<img src="<?php echo $namefile ?>" height="100px" width="70px"/>
		<?php
	}

}

?>
