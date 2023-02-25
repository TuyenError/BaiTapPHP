<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="thuyha">
        <input type="submit" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {
        if (isset($_FILES['thuyha'])) {
            $ha = $_FILES['thuyha'];
            $fileup = "my_uploaded_file.jpg";
            echo $fileup;
            move_uploaded_file($ha['tmp_name'], $fileup);
            ?>
            <img src="<?php echo $fileup ?>" height="100" width="100">;

        <?php

        }
    }
    ?>
</body>

</html>