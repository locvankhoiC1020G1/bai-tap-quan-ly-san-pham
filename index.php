<?php
include_once 'product.php';
include_once 'product-manager.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý sản ph</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3> Quản lý sản phẩm</h3>
<form action="" method="post">
    <label for="a"> ID</label>
    <input type="number" name="id" id="a">
    <label for="b">nhập tên sản phẩm</label>
    <input type="number" name="name" id="b">
    <label for="c">Thể loại</label>
    <input type="number" name="catgory" id="c">
    <label for="d"> Nhập số lượng</label>
    <input type="number" name="amount" id="d">
    <label for="e">giá sản phẩm</label>
    <input type="number" name="price" id="e">
    <label for="f"> mô tả sản phẩm</label>
    <input type="number" name="discrible" id="f">
    <label for="g">ngày tạo sản phẩm </label>
    <input type="number" name="date" id="g">
    <label for="h"> ảnh sản phẩm</label>
    <input type="number" name="img" id="h">

    <button type="submit">Thêm </button>
    <button type="submit">Sửa</button>
    <button type="submit">Xóa</button>
</form>

<h2> Danh sách sản phẩm </h2>
<table>
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td> Thể loại mặt hàng</td>
        <td>Số lượng</td>
        <td>Đơn giá</td>
        <td>Mô tả</td>
        <td>ngày tạo</td>
        <td>ảnh sản phẩm</td>
        <td></td>
    </tr>
</table>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $catgory = $_POST['catgory'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $discrible = $_POST['discrible'];
    $date = $_POST['date'];
    $img = $_POST['img'];
}
?>
</body>
</html>