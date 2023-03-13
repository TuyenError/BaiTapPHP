<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Shop Giay va Tui xach</title>

    <style>
        img{
            width: 200px;
            
        }
        .titles{
            text-align:left;
            color: #ff4500 ;
            font-size:  20px;
        }
        .price{
            color: red;
        }
        button{
            background: orange;
            border-radius: 5px;
            border: none;
           
        }
        .container{
            text-align:center;
        }
        .card-text1{
            text-decoration:line-through;
        }
        .card-title{
            width: 100;
            height: 100;
        }


    </style>
    
</head>
<body>
 
    <?php 
        $sanpham=array(
            'GIÀY DÉP'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://static.nike.com/a/images/t_PDP_1728_v1/decaf550-27a9-4099-8129-f2d53bf7b77d/air-max-sol-sandals-J0Xsdr.png"/>',
                    'name'=>'Nike Air Max Sol Mens Sandals',
                    'price'=>400000,
                    'code' => 'Mens Sandals',
                    'price_old' => 600000,

                ),
                'sp2'=>array(
                    'img'=>'<img src="https://static.nike.com/a/images/t_PDP_1728_v1/a7f874a5-d820-407f-a651-b2db5f1a9ff2/air-force-1-07-lv8-shoes-GwvjTM.png"/>',
                    'name'=>'Nike Air Force 1 07 LV8 Men s Shoes ',
                    'code' => '1 07 LV8 Men',
                    'price'=>600000,
                    'price_old' => 800000,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://static.nike.com/a/images/t_PDP_1728_v1/5579f6f1-32eb-4044-af3c-34ae485aaba9/court-vision-low-next-nature-shoe-p3CnbT.png"/>',
                    'name'=>'Nike Court Vision Low Next Nature',
                    'code' => 'Men',
                    'price'=>218000,
                    'price_old' => 300000,
                ),
        
               
                ),

            'TÚI XÁCH'=>array(
                'sp01'=>array(
                    'img'=>'<img src="https://eu.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-vertical-box-trunk-other-leathers-bags--M59666_PM2_Front%20view.png?wid=1240&hei=1240"/>',
                    'name'=>' Nicolas Ghesquière ',
                    'code' => 'louis-vuitton',
                    'price'=>500000,
                    'price_old' => "",
                ),
                'sp02'=>array(
                    'img'=>'<img src="https://eu.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-lv-x-yk-mini-soft-trunk-monogram-eclipse-canvas-bags--M81936_PM2_Front%20view.png?wid=1240&hei=1240"/>',
                    'name'=>'Trunk mềm LV x YK',
                    'code' => 'louis-vuitton',
                    'price'=>600000,
                    'price_old' => "",
                ),
                'sp03' => array(
                    'img' => '<img src="https://eu.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-trunk-messenger-monogram-eclipse-canvas-bags--M45727_PM2_Front%20view.png?wid=1240&hei=1240"/>',
                    'name' => 'Trunk Messenger',
                    'code' => 'louis-vuitton',
                    'price' => 450000,
                    'price_old' => "",

                ),


        )
    )
        ?>
    <?php
    foreach ($sanpham as $k => $vl) {
        ?>
            <div class="container"> <div class="titles"><?php echo $k ?></div></div>
            <div class="container">
                    <div class="row">
                        <?php foreach ($vl as $k1 => $vl1) {
                            ?>
                               <div class="col-sm-4">
                                    <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $vl1['img'] ?></h5>
                                        <p class="card-text"><?php echo $vl1['name'] ?></p>
                                        <p class="card-text"><?php echo $vl1['code'] ?></p>
                                        <p class="card-text1"><?php echo $vl1['price_old'] ?></p>
                                        <p class="card-text"> <div class="price"><?php echo $vl1['price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                        <button onclick="myFunction()">Đặt mua</button>
                                        <script>
                                            function myFunction() {
                                                alert("Thank you your order !");
                                            }
                                        </script>
                                    </div>
                                    </div>
                                </div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
            </div>
           
        
           
        <?php
    }
    ?>
</body>
</html>