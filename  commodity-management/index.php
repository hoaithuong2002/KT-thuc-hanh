<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<link rel="stylesheet" href="style.css">
<body>
<form method="post">
    <fieldset>
        <legend><h1>Commodity Management</h1></legend>
        <div>Mã Mặt Hàng<input type="text" name="id" placeholder="nhập id">
            Tên Mặt Hàng<input type="text" name="name" placeholder="nhập tên">
            loại Mặt Hàng<input type="text" name="category" placeholder="sản phẩm loại gì?">
            Số Lượng <input type="text" name="amout" placeholder="số lượng"></div>
        <div>Đơn giá <input type="text" name="price" placeholder="giá bao nhiêu">
            Mô Tả <input type="text" name="description" placeholder="Mô tả sản phẩm">
            Ngày Tạo<input id="date" type="text" name="date" placeholder="ngày tạo ">
            Ảnh :<input type="text" name="img">
        <button type="submit" class="actions" id="update">Sửa</button>
        <button type="submit" class="actions" id="delete">Xóa</button>
    </fieldset>
    <table><h1>Danh Sách sản phẩm</h1>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Loại</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Mô Tả</th>
            <th>Ngày Tạo</th>
            <th>Ảnh</th>
            <th>HÀnh Động</th>
        </tr>
    </table>
</form>

<?php foreach ($GLOBALS['listProducts'] as $product): ?>
    <tr>
        <td><?php echo $product->getId() ?></td>
        <td><?php echo $product->getName() ?></td>
        <td><?php echo $product->getCategory() ?></td>
        <td><?php echo $product->getAmount() ?></td>
        <td><?php echo $product->getPrice() ?></td>
        <td><?php echo $product->getDescription() ?></td>
        <td><?php echo $product->getCreated() ?></td>
        <td><?php echo $product->getImg() ?></td>
        <td>
            <form>

                <button>Sửa</button>
            </form>
        </td>
    </tr>
<?php endforeach; ?>
</body>
</html>
<?php
$date = date("l jS \of F Y h:i:s A");
$script = "<script>document.getElementById('date.json').value='$date'</script>";
echo $script;
