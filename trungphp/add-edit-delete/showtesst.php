<!DOCTYPE html>
<?php session_start() ?>
<html>
<body>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>
  <?php
  // $fruit=array();
  // $fruit[0]['TenSP']='Chanh dây';
  // $fruit[0]['GiaSP']='25.000';
  // $fruit[0]['MoTa']='Ngọt';
  // $fruit[0]['Hinhanh']='https://tse1.mm.bing.net/th?id=OIP.7Ij2-4qc2It75EtYEvTykwHaGV&pid=Api&P=0';

  // $fruit[1]['TenSP']='Táo';
  // $fruit[1]['GiaSP']='20.000';
  // $fruit[1]['MoTa']='Ngon';
  // $fruit[1]['Hinhanh']='https://newfreshfoods.com.vn/datafiles/3/2018-02-27/16100958548622_hoaqua_1-500x500.jpg';

  // $fruit[2]['TenSP']='Xoài';
  // $fruit[2]['GiaSP']='25.000';
  // $fruit[2]['MoTa']='Ngon!!!';
  // $fruit[2]['Hinhanh']='http://hn.check.net.vn/data/product/mainimages/original/product5018.jpg';

  ?>
  <table>
    <tr>
      <td>Tên sản phẩm</td>
      <td>Giá sản phẩm</td>
      <td>Mô tả sản phẩm</td>
      <td>Hình ảnh sản phẩm</td>
      <td>Hành động</td>
    </tr>
    <?php
    if (isset($_SESSION['fruit'])){
      $n = count($_SESSION['fruit']);
    for ($i = 0; $i < $n; $i++) {
    ?>
      <tr>
        <td><?php echo $_SESSION['fruit'][$i]['tensp']; ?></td>
        <td><?php echo $_SESSION['fruit'][$i]['giatien']; ?></td>
        <td><?php echo $_SESSION['fruit'][$i]['mota']; ?></td>
        <td><img src="<?php echo $_SESSION['fruit'][$i]['hinhanh']; ?>"></td>
        <td><a href="http://localhost/vd/edit.php?id=<?php echo $i ?>">Edit</a></td>
        <td><a href="http://localhost/vd/delete.php?iddel=<?php echo $i ?>">Delete</a></td>
      </tr>
    <?php } } ?>
  </table>
  <a href="http://localhost/vd/add.php">Nhập tiếp</a>
</body>
</html>