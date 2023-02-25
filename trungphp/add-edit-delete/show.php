<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <title>Store</title>

    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <div id="fb-root"></div>

</head>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
    

    .glyphicon {
        margin-right: 5px;
    }

    .thumbnail {
        margin: 10px 0 20px 20px;
        padding: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }

    .item.list-group-item {
        float: none;
        width: 100%;
        background-color: #fff;
        margin-bottom: 10px;
    }

    .item.list-group-item:nth-of-type(odd):hover,
    .item.list-group-item:hover {
        background: #428bca;
    }

    .item.list-group-item .list-group-image {
        margin-right: 10px;
    }

    .item.list-group-item .thumbnail {
        margin-bottom: 0px;
    }

    .item.list-group-item .caption {
        padding: 9px 9px 0px 9px;
    }

    .item.list-group-item:nth-of-type(odd) {
        background: #eeeeee;
    }

    .item.list-group-item:before,
    .item.list-group-item:after {
        content: "";
    }

    .item.list-group-item img {
        float: left;
    }

    .item.list-group-item:after {
        clear: both;
    }

    .list-group-item-text {
        margin: 0 0 11px;
    }
    .grid {
   display: grid;
   grid-template-columns: repeat(4, 25%);
   grid-column-gap: 5px;
}
.add{
    margin: 10px 0 0 10px;
}
</style>

<body>
    <div> <a class="btn btn-success add" href="http://localhost/trungphp/add-edit-delete/add.php">Add</a>
        <div class="container">
            <div id="products">
                <div class="grid">
                        <?php
                        if (isset($_SESSION['fruit'])) {
                            print_r($_SESSION['fruit']);
                            $n = count($_SESSION['fruit']);
                            foreach ($_SESSION['fruit'] as $key => $product) {

                        ?>
                                <div class="thumbnail column "> 
                                <img class="group list-group-image" src="<?php echo $product['hinhanh']; ?>" alt="" width="300">
                                            <div class="caption ">
                                                <h2 class="group inner list-group-item-heading"><?php echo $product['tensp']; ?></h2>
                                        <h4 class="group inner list-group-item-text"><?php echo $product['mota']; ?></h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="lead"> <?php echo $product['giatien']; ?></h4>
                                            </div>
                                            <div class="col-md-6"> <a class="btn btn-primary" href="http://localhost/trungphp/add-edit-delete/edit.php?id=<?php echo $key ?>">Edit</a>
                                            </div>
                                            <div class="col-md-6 "> <a class="btn btn-danger" href="http://localhost/trungphp/add-edit-delete/delete.php?iddel=<?php echo $key ?>">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>